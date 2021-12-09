<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Antonio Orlando',
            'username' => 'tony',
            'email' => 'orlando@example.com',
        ]);
        User::factory()->create([
            'name' => 'Iolanda Tanaka',
            'username' => 'ioio',
            'email' => 'ioio@example.com',
        ]);
        User::factory()->create([
            'name' => 'Guilherme Martins',
            'username' => 'gui-martins',
            'email' => 'guimartins@example.com',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);
        Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Post::factory(25)->create();
        Comment::factory(30)->create();

    }
}
