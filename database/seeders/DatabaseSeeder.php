<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $category = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $category->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, voluptatem nesciunt? Nam eligendi dicta nemo exercitationem, repellat molestiae consequuntur magni. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui voluptate eveniet nulla, enim odio perspiciatis omnis placeat temporibus fugit rem.</p>'
        ]);
    
        Post::create([
            'user_id' => $user->id,
            'category_id' => $category->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, voluptatem nesciunt? Nam eligendi dicta nemo exercitationem, repellat molestiae consequuntur magni. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui voluptate eveniet nulla, enim odio perspiciatis omnis placeat temporibus fugit rem.</p>'
        ]);
    }
}
