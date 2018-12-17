<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteBlog()
    {
        $findpost = \App\Post::find(15);
        $findpost->delete();
        $post = \App\Post::all();
        $this->assertDatabaseMissing('posts', ["id" => $findpost->id]);
    }
}
