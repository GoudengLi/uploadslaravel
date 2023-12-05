<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        


        Post::factory(5)->create();
        
        // User::truncate();
        // Category::truncate();
        // Post::truncate();
        // $user=User::factory()->create([
//'name'=>'John Doe' 
        // ]);

        // $personal=Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'personal'

        // ]
        // );
        // $family=Category::create([
        //     'name'=>'Family',
        //     'slug'=>'family'

        // ]);
        // $work=Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'

        // ]);
        
        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$family->id,
        //     'title'=>'My Family Post',
        //     'slug'=>'my-first-post',
        //     'excerpt'=>'<p>Here is Jonny!!!</p>',
        //     'body'=>'<p>Jonny is here???</p>',


        // ]);
        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$work->id,
        //     'title'=>'My Work Post',
        //     'slug'=>'my-work-post',
        //     'excerpt'=>'<p>Here is Jonny!!!</p>',
        //     'body'=>'<p>Jonny is here???</p>',

        // ]); 
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}