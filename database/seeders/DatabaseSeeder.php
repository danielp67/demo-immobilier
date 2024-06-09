<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         $user = User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example',
         ]);

        $categories = ['maison', 'appartement', 'local commercial', 'garage', 'terrain', 'autre'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

         Post::factory(30)->for($user)->create();
    }
}
