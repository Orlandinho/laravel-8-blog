<?php

namespace Database\Seeders;

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
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ]);
        User::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
        ]);
        User::factory()->create([
            'name' => 'Jake Doe',
            'email' => 'jakedoe@example.com',
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

        Post::factory(20)->create();

    }
}
