<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Post::create([
            'name' => 'Expanding Card',
            'css_name' => 'expandingcard',
            'js_name' => 'expandingcard',
            'slug' => 'expanding-card',
        ]);

        Post::create([
            'name' => 'Progress Steps',
            'css_name' => 'progress-steps',
            'js_name' => 'progress-steps',
            'slug' => 'progress-steps',
        ]);

        Post::create([
            'name' => 'Rotating Navigation Animation',
            'css_name' => 'rotating-navigation-animation',
            'js_name' => 'rotating-navigation-animation',
            'slug' => 'rotating-navigation-animation',
        ]);
    }
}
