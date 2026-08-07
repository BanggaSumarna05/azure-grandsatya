<?php

namespace App\Http\Controllers;

use App\Models\Fleet;
use App\Models\BlogPost;

class SitemapController extends Controller
{
    public function index()
    {
        $fleets = Fleet::select('id', 'updated_at')->get();

        $blogPosts = BlogPost::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->select('slug', 'updated_at')
            ->get();

        // Static pages
        $staticPages = [
            ['url' => url('/'),           'changefreq' => 'weekly',  'priority' => '1.0'],
            ['url' => url('/about'),      'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => url('/services'),   'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => url('/fleet'),      'changefreq' => 'weekly',  'priority' => '0.8'],
            ['url' => url('/gallery'),    'changefreq' => 'monthly', 'priority' => '0.6'],
            ['url' => url('/blog'),       'changefreq' => 'weekly',  'priority' => '0.7'],
            ['url' => url('/contact'),    'changefreq' => 'yearly',  'priority' => '0.5'],
        ];

        $xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // Static pages
        foreach ($staticPages as $page) {
            $xml .= "  <url>\n";
            $xml .= '    <loc>' . htmlspecialchars($page['url']) . "</loc>\n";
            $xml .= '    <lastmod>' . now()->toW3cString()        . "</lastmod>\n";
            $xml .= '    <changefreq>' . $page['changefreq']      . "</changefreq>\n";
            $xml .= '    <priority>'   . $page['priority']        . "</priority>\n";
            $xml .= "  </url>\n";
        }

        // Fleet detail pages
        foreach ($fleets as $fleet) {
            $xml .= "  <url>\n";
            $xml .= '    <loc>' . htmlspecialchars(url('/fleet/' . $fleet->id)) . "</loc>\n";
            $xml .= '    <lastmod>' . $fleet->updated_at->toW3cString()          . "</lastmod>\n";
            $xml .= "    <changefreq>monthly</changefreq>\n";
            $xml .= "    <priority>0.7</priority>\n";
            $xml .= "  </url>\n";
        }

        // Blog posts
        foreach ($blogPosts as $post) {
            $xml .= "  <url>\n";
            $xml .= '    <loc>' . htmlspecialchars(url('/blog/' . $post->slug)) . "</loc>\n";
            $xml .= '    <lastmod>' . $post->updated_at->toW3cString()           . "</lastmod>\n";
            $xml .= "    <changefreq>weekly</changefreq>\n";
            $xml .= "    <priority>0.6</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }
}
