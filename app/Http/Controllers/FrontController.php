<?php

namespace App\Http\Controllers;

use App\Mail\QuotationMail;
use App\Models\BlogPost;
use App\Models\Fleet;
use App\Models\GalleryPhoto;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        $fleets        = Fleet::orderBy('created_at', 'asc')->get();
        $galleryPhotos = GalleryPhoto::orderBy('order')->orderBy('id')->limit(12)->get();
        $recentPosts   = BlogPost::whereNotNull('published_at')
                            ->where('published_at', '<=', now())
                            ->orderBy('published_at', 'desc')
                            ->limit(3)
                            ->get();
        $firstFleet    = $fleets->first();

        return view('index', compact('fleets', 'galleryPhotos', 'recentPosts', 'firstFleet'));
    }

    /* ---- Standalone Pages ---- */

    public function about()
    {
        $teamMembers = TeamMember::orderBy('id')->get();
        $currentPage = 'about';
        return view('pages.about', compact('teamMembers', 'currentPage'));
    }

    public function services()
    {
        $currentPage = 'services';
        return view('pages.services', compact('currentPage'));
    }

    public function gallery()
    {
        $galleryPhotos = GalleryPhoto::orderBy('order')->orderBy('id')->get();
        $currentPage   = 'gallery';
        return view('pages.gallery', compact('galleryPhotos', 'currentPage'));
    }

    public function contact()
    {
        $currentPage = 'contact';
        return view('pages.contact', compact('currentPage'));
    }

    /* ---- Fleet ---- */

    public function fleetList()
    {
        $fleets      = Fleet::orderBy('class')->orderBy('name')->get();
        $currentPage = 'fleet';
        return view('fleet', compact('fleets', 'currentPage'));
    }

    public function fleetShow($id)
    {
        $fleet         = Fleet::findOrFail($id);
        $relatedFleets = Fleet::where('id', '!=', $id)
                              ->where('class', $fleet->class)
                              ->inRandomOrder()
                              ->limit(4)
                              ->get();

        // fallback to random if same-class has less than 4
        if ($relatedFleets->count() < 4) {
            $extra = Fleet::where('id', '!=', $id)
                          ->whereNotIn('id', $relatedFleets->pluck('id'))
                          ->inRandomOrder()
                          ->limit(4 - $relatedFleets->count())
                          ->get();
            $relatedFleets = $relatedFleets->concat($extra);
        }

        $currentPage = 'fleet';
        return view('fleet-detail', compact('fleet', 'relatedFleets', 'currentPage'));
    }

    /* ---- Blog ---- */

    public function blog()
    {
        $posts       = BlogPost::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->paginate(9);
        $currentPage = 'blog';
        return view('blog', compact('posts', 'currentPage'));
    }

    public function blogLoadMore(Request $request)
    {
        $page  = (int) $request->input('page', 2);
        $posts = BlogPost::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->paginate(9, ['*'], 'page', $page);

        $html = '';
        foreach ($posts as $post) {
            $imgUrl      = $post->photo ? \Storage::url($post->photo) : null;
            $publishedAt = $post->published_at->translatedFormat('d F Y');
            $showUrl     = route('front.blog.show', $post->slug);
            $title       = e($post->title);
            $excerpt     = $post->excerpt ? e($post->excerpt) : '';

            $thumbHtml = $imgUrl
                ? '<img src="'.e($imgUrl).'" alt="'.$title.'" loading="lazy" style="width:100%;height:100%;object-fit:cover">'
                : '<div style="height:100%;display:flex;align-items:center;justify-content:center;color:#d1d5db;font-size:2.5rem"><i class="bi bi-newspaper"></i></div>';

            $excerptHtml = $excerpt
                ? '<p class="gs-blog-nv-title" style="font-size:.8125rem;font-weight:400;color:var(--text-muted)">'.$excerpt.'</p>'
                : '';

            $html .= '<a href="'.$showUrl.'" class="gs-blog-nv-card" style="text-decoration:none">'
                . '<div class="gs-blog-nv-thumb">'.$thumbHtml.'</div>'
                . '<div class="gs-blog-nv-body">'
                .   '<div class="gs-blog-nv-meta"><i class="bi bi-calendar3"></i>'.$publishedAt.'</div>'
                .   '<div class="gs-blog-nv-title">'.$title.'</div>'
                .   $excerptHtml
                .   '<span class="gs-read-more-orange">Read More <span class="dot"><i class="bi bi-arrow-up-right"></i></span></span>'
                . '</div>'
                . '</a>';
        }

        return response()->json([
            'html'     => $html,
            'hasMore'  => $posts->hasMorePages(),
            'nextPage' => $page + 1,
        ]);
    }

    public function blogShow(string $slug)
    {
        $post = BlogPost::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedPosts = BlogPost::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->where('id', '!=', $post->id)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        $currentPage = 'blog';
        return view('blog-detail', compact('post', 'relatedPosts', 'currentPage'));
    }

    /* ---- Contact / Quotation Form ---- */

    public function postRequest(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'message' => 'required|string|min:10',
            // optional but accepted fields
            'company' => 'nullable|string|max:150',
            'contact' => 'nullable|string|max:30',
            'subject' => 'nullable|string|max:200',
            // homepage booking bar fields
            'first_name' => 'nullable|string|max:100',
            'last_name'  => 'nullable|string|max:100',
        ]);

        // Normalise: homepage uses first_name / last_name, contact page uses name / company
        $detail = [
            'name'    => $validated['name']    ?? ($validated['first_name'] ?? '—'),
            'company' => $validated['company'] ?? ($validated['last_name']  ?? '—'),
            'email'   => $validated['email'],
            'contact' => $validated['contact'] ?? '—',
            'subject' => $validated['subject'] ?? '—',
            'message' => $validated['message'],
        ];

        // Send email — catches exceptions so form still returns success to visitor
        try {
            $to = config('mail.to_address', env('MAIL_TO_ADDRESS', 'cs@grandsatya.com'));
            Mail::to($to)->send(new QuotationMail($detail));
        } catch (\Throwable $e) {
            \Log::error('QuotationMail failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Pesan Anda telah dikirim! Tim kami akan segera menghubungi Anda dalam 1×24 jam.');
    }
}
