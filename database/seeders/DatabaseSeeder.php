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
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'Personal Post',
            'slug' => 'personal-post',
            'excerpt' => '<p>This is my personal post</p>',
            'body' => '<p>This is my personal post bodyis my personal post bodyis my personal post bodyis my personal post bodyis my personal post bodyis my personal post bodyis my personal post bodyis my personal post bodyis my personal post bodyis my personal post bodyis my personal post bodyis my personal post bodyis my personal post body</p>',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'Family Post',
            'slug' => 'family-post',
            'excerpt' => '<p>This is my family post</p>',
            'body' => '<p>This is my family post body is my family post body is my family post body is my family post body is my family post body is my family post body is my family post body is my family post body is my family post body is my family post body is my family post body is my family post body is my family post body is my family post body</p>',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'Work Post',
            'slug' => 'work-post',
            'excerpt' => '<p>This is my work post</p>',
            'body' => '<p>This is a work post body is a work post body is a work post body is a work post body is a work post body is a work post body is a work post body is a work post body is a work post body is a work post body is a work post body is a work post body is a work post body is a work post body is a work post body is a work post body</p>',
        ]);
    }
}
