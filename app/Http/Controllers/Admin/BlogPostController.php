<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::orderByDesc('published_at')->get();
        return view('admin.blog-posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog-posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'        => 'required',
            'content'      => 'required',
            'excerpt'      => 'nullable',
            'photo'        => 'nullable|image|mimes:jpeg,png,webp|max:2048',
            'published_at' => 'nullable|date',
        ]);

        $slug = $this->uniqueSlug(Str::slug($request->title));

        $excerpt = $request->excerpt
            ?: Str::limit(strip_tags($request->content), 150, '');

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('blog', 'public');
        }

        BlogPost::create([
            'title'        => $request->title,
            'slug'         => $slug,
            'content'      => $request->content,
            'excerpt'      => $excerpt,
            'photo'        => $photoPath,
            'published_at' => $request->published_at ?: null,
        ]);

        return redirect()->route('admin.blog-posts.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function show(BlogPost $blogPost)
    {
        return view('admin.blog-posts.show', compact('blogPost'));
    }

    public function edit(BlogPost $blogPost)
    {
        return view('admin.blog-posts.edit', compact('blogPost'));
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        $request->validate([
            'title'        => 'required',
            'content'      => 'required',
            'excerpt'      => 'nullable',
            'photo'        => 'nullable|image|mimes:jpeg,png,webp|max:2048',
            'published_at' => 'nullable|date',
        ]);

        $excerpt = $request->excerpt
            ?: Str::limit(strip_tags($request->content), 150, '');

        $data = [
            'title'        => $request->title,
            'content'      => $request->content,
            'excerpt'      => $excerpt,
            'published_at' => $request->published_at ?: null,
        ];

        if ($request->hasFile('photo')) {
            if ($blogPost->photo && Storage::disk('public')->exists($blogPost->photo)) {
                Storage::disk('public')->delete($blogPost->photo);
            }
            $data['photo'] = $request->file('photo')->store('blog', 'public');
        }

        $blogPost->update($data);

        return redirect()->route('admin.blog-posts.index')->with('success', 'Artikel berhasil diupdate');
    }

    public function destroy(BlogPost $blogPost)
    {
        if ($blogPost->photo && Storage::disk('public')->exists($blogPost->photo)) {
            Storage::disk('public')->delete($blogPost->photo);
        }
        $blogPost->delete();
        return redirect()->route('admin.blog-posts.index')->with('success', 'Artikel berhasil dihapus');
    }

    private function uniqueSlug(string $slug): string
    {
        $original = $slug;
        $count = 2;
        while (BlogPost::where('slug', $slug)->exists()) {
            $slug = $original . '-' . $count++;
        }
        return $slug;
    }
}
