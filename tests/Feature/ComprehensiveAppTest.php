<?php

namespace Tests\Feature;

use App\Models\Fleet;
use App\Models\BlogPost;
use App\Models\GalleryPhoto;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ComprehensiveAppTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    /* ==========================================
     * 1. HALAMAN PUBLIK & ROUTING
     * ========================================== */
    public function test_all_public_views_render_successfully()
    {
        $routes = ['/', '/about', '/services', '/gallery', '/contact', '/fleet', '/blog'];
        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }

    public function test_fleet_detail_view_renders_successfully()
    {
        $fleet = Fleet::first();
        $this->assertNotNull($fleet);
        $response = $this->get('/fleet/' . $fleet->id);
        $response->assertStatus(200);
        $response->assertSee($fleet->name);
    }

    public function test_blog_detail_view_renders_successfully()
    {
        $post = BlogPost::first();
        $this->assertNotNull($post);
        $response = $this->get('/blog/' . $post->slug);
        $response->assertStatus(200);
        $response->assertSee($post->title);
    }

    public function test_sitemap_xml_generates_validly()
    {
        $response = $this->get('/sitemap.xml');
        $response->assertStatus(200);
    }

    /* ==========================================
     * 2. FORM INTERAKSI (REQUEST QUOTATION)
     * ========================================== */
    public function test_post_request_quotation_form_submission()
    {
        $response = $this->post('/postRequest', [
            'name' => 'PT Testing Indonesia',
            'email' => 'testing@corp.com',
            'contact' => '08123456789',
            'subject' => 'Sewa Bulanan Innova',
            'message' => 'Mohon penawaran harga sewa 3 unit Innova Zenix bulanan.'
        ]);

        $response->assertSessionHasNoErrors();
    }

    /* ==========================================
     * 3. DATABASE & SEEDER INTEGRITY
     * ========================================== */
    public function test_database_has_seeded_data()
    {
        $this->assertGreaterThan(0, Fleet::count());
        $this->assertGreaterThan(0, BlogPost::count());
        $this->assertGreaterThan(0, GalleryPhoto::count());
        $this->assertGreaterThan(0, User::count());
    }

    /* ==========================================
     * 4. FILAMENT / ADMIN PANEL ACCESS & AUTH
     * ========================================== */
    public function test_admin_login_screen_renders()
    {
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
    }

    public function test_admin_user_can_access_dashboard()
    {
        $admin = User::first();
        $this->assertNotNull($admin);

        $response = $this->actingAs($admin)->get('/admin');
        $response->assertStatus(200);
    }
}
