<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Blog::factory(20)->create();

        User::create([
            "username" => "ivan",
            "email" => "ivan@gmail.com",
            "phone_number" => "082345465833",
            "password" => Hash::make("12345")
        ]);

        Category::create([
            "name" => "Self Development",
            "slug" => "self-development"
        ]);

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);

        Category::create([
            "name" => "Entertainment",
            "slug" => "entertainment"
        ]);
    }
}
