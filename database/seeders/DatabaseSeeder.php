<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([
        //     'name' => 'sandika',
        //     'email' => 'sandika@gmail.com',
        //     'password' => bcrypt('sul'),
        //     'name' => 'sandika'
        // ]);
        // User::create([
        //     'name' => 'hamzah',
        //     'email' => 'hamzah@gmail.com',
        //     'password' => bcrypt('hamzah'),
        //     'name' => 'hamzah'
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'programing',
            'slug' => 'programing',

        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'

        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'

        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',

        //     'excerpt' => ' containing Lorem Ipsum passages , 
        //     and more recently with desktop publishing software 
        //     like Aldus PageMaker including versions of Lorem Ipsum.',

        //     'body' => 'Lorem Ipsum is simply dummy text of the 
        //     printing and typesetting industry. Lorem Ipsum has 
        //     been the industrys standard dummy text ever since 
        //     the 1500s, when an unknown printer took a galley of 
        //     type and scrambled it to make a type specimen book. 
        //     It has survived not only five centuries, but also the leap 
        //     into electronic typesetting, remaining essentially unchanged. 
        //     It was popularised in the 1960s with the release of Letraset sheets 
        //     containing Lorem Ipsum passages, and more recently with ',
        //     'user_id' => '1',
        //     'category_id' => '1'
        // ]);

        // Post::create([
        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',

        //     'excerpt' => ' containing Lorem Ipsum passages, 
        //     and more recently with desktop publishing software 
        //     like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'body' => 'Lorem Ipsum is simply dummy text of the 
        //     printing and typesetting industry. Lorem Ipsum has 
        //     been the industrys standard dummy text ever since 
        //     the 1500s, when an unknown printer took a galley of 
        //     type and scrambled it to make a type specimen book. 
        //     It has survived not only five centuries, but also the leap 
        //     into electronic typesetting, remaining essentially unchanged. 
        //     It was popularised in the 1960s with the release of Letraset sheets 
        //     containing Lorem Ipsum passages, and more recently with ',
        //     'user_id' => '1',
        //     'category_id' => '1'
        // ]);
        // Post::create([
        //     'title' => 'judul tiga',
        //     'slug' => 'judul-tiga',

        //     'excerpt' => ' containing Lorem Ipsum passages, 
        //     and more recently with desktop publishing software 
        //     like Aldus PageMaker including versions of Lorem Ipsum.',

        //     'body' => 'Lorem Ipsum is simply dummy text of the 
        //     printing and typesetting industry. Lorem Ipsum has 
        //     been the industrys standard dummy text ever since 
        //     the 1500s, when an unknown printer took a galley of 
        //     type and scrambled it to make a type specimen book. 
        //     It has survived not only five centuries, but also the leap 
        //     into electronic typesetting, remaining essentially unchanged. 
        //     It was popularised in the 1960s with the release of Letraset sheets 
        //     containing Lorem Ipsum passages, and more recently with ',
        //     'category_id' => '2',
        //     'user_id' => '1'
        // ]);
        // Post::create([
        //     'title' => 'judul empat',
        //     'slug' => 'judul-empat',

        //     'excerpt' => ' containing Lorem Ipsum passages, 
        //     and more recently with desktop publishing software 
        //     like Aldus PageMaker including versions of Lorem Ipsum.',

        //     'body' => 'Lorem Ipsum is simply dummy text of the 
        //     printing and typesetting industry. Lorem Ipsum has 
        //     been the industrys standard dummy text ever since 
        //     the 1500s, when an unknown printer took a galley of 
        //     type and scrambled it to make a type specimen book. 
        //     It has survived not only five centuries, but also the leap 
        //     into electronic typesetting, remaining essentially unchanged. 
        //     It was popularised in the 1960s with the release of Letraset sheets 
        //     containing Lorem Ipsum passages, and more recently with ',
        //     'category_id' => '2',
        //     'user_id' => '1'
        // ]);
        // Post::create([
        //     'title' => 'judul lima',
        //     'slug' => 'judul-lima',

        //     'excerpt' => ' containing Lorem Ipsum passages, 
        //     and more recently with desktop publishing software 
        //     like Aldus PageMaker including versions of Lorem Ipsum.',

        //     'body' => 'Lorem Ipsum is simply dummy text of the 
        //     printing and typesetting industry. Lorem Ipsum has 
        //     been the industrys standard dummy text ever since 
        //     the 1500s, when an unknown printer took a galley of 
        //     type and scrambled it to make a type specimen book. 
        //     It has survived not only five centuries, but also the leap 
        //     into electronic typesetting, remaining essentially unchanged. 
        //     It was popularised in the 1960s with the release of Letraset sheets 
        //     containing Lorem Ipsum passages, and more recently with ',
        //     'category_id' => '1',
        //     'user_id' => '2'
        // ]);
    }
}
