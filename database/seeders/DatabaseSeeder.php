<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan',
        ]);
        Category::create([
            'name' => 'Olahraga',
            'slug' => 'olahraga',
        ]);

        Post::create([
            'category_id' => 1,
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'exerpt' => 'Exerpt Pertama',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, placeat.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam cum animi dolorum cumque at asperiores laboriosam similique vero, hic exercitationem repudiandae corporis incidunt, amet aliquam ducimus fugit. Libero, odio aperiam!</p>',
            'author' => 'Author Pertama'
        ]);
        Post::create([
            'category_id' => 2,
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'exerpt' => 'Exerpt Kedua',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, placeat.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam cum animi dolorum cumque at asperiores laboriosam similique vero, hic exercitationem repudiandae corporis incidunt, amet aliquam ducimus fugit. Libero, odio aperiam!</p>',
            'author' => 'Author Pertama'
            
        ]);
    }
}
