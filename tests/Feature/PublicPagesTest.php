<?php

namespace Tests\Feature;

use App\Models\Fleet;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_home_page_can_be_rendered()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_about_page_can_be_rendered()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }

    public function test_services_page_can_be_rendered()
    {
        $response = $this->get('/services');
        $response->assertStatus(200);
    }

    public function test_gallery_page_can_be_rendered()
    {
        $response = $this->get('/gallery');
        $response->assertStatus(200);
    }

    public function test_contact_page_can_be_rendered()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

    public function test_fleet_index_page_can_be_rendered()
    {
        $response = $this->get('/fleet');
        $response->assertStatus(200);
    }

    public function test_fleet_detail_page_can_be_rendered()
    {
        $fleet = Fleet::first();
        if ($fleet) {
            $response = $this->get('/fleet/' . $fleet->id);
            $response->assertStatus(200);
        }
    }

    public function test_blog_index_page_can_be_rendered()
    {
        $response = $this->get('/blog');
        $response->assertStatus(200);
    }

    public function test_blog_detail_page_can_be_rendered()
    {
        $post = BlogPost::first();
        if ($post) {
            $response = $this->get('/blog/' . $post->slug);
            $response->assertStatus(200);
        }
    }

    public function test_admin_login_page_can_be_rendered()
    {
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
    }
}
