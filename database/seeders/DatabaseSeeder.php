<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Salsabila Nada Adzani',
            'username' => 'salsabilanada',
            'email' => 'sadzani@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Muhammad Gilang Ramadhan',
        //     'email' => 'muhgilang@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur temporibus quidem enim illo ipsa voluptatibus, qui voluptates necessitatibus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur temporibus quidem enim illo ipsa voluptatibus, qui voluptates necessitatibus eveniet quaerat optio voluptate cumque ad dolor dolores repellendus praesentium quod facere neque labore libero? Optio facere delectus id adipisci. Fugiat nulla amet cupiditate nostrum odio porro enim dolorum quo. At et officiis rem corporis! Nulla, officia. Quas obcaecati consectetur voluptates, veniam nisi temporibus! Et laborum dolorem facere delectus neque animi ullam consequatur atque, autem tempore impedit rerum, soluta excepturi! Dicta excepturi voluptas porro, repellat omnis error magnam natus hic fugiat officiis nam iure adipisci quis ad minima eius quos ratione temporibus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur temporibus quidem enim illo ipsa voluptatibus, qui voluptates necessitatibus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur temporibus quidem enim illo ipsa voluptatibus, qui voluptates necessitatibus eveniet quaerat optio voluptate cumque ad dolor dolores repellendus praesentium quod facere neque labore libero? Optio facere delectus id adipisci. Fugiat nulla amet cupiditate nostrum odio porro enim dolorum quo. At et officiis rem corporis! Nulla, officia. Quas obcaecati consectetur voluptates, veniam nisi temporibus! Et laborum dolorem facere delectus neque animi ullam consequatur atque, autem tempore impedit rerum, soluta excepturi! Dicta excepturi voluptas porro, repellat omnis error magnam natus hic fugiat officiis nam iure adipisci quis ad minima eius quos ratione temporibus.',
        //    'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur temporibus quidem enim illo ipsa voluptatibus, qui voluptates necessitatibus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur temporibus quidem enim illo ipsa voluptatibus, qui voluptates necessitatibus eveniet quaerat optio voluptate cumque ad dolor dolores repellendus praesentium quod facere neque labore libero? Optio facere delectus id adipisci. Fugiat nulla amet cupiditate nostrum odio porro enim dolorum quo. At et officiis rem corporis! Nulla, officia. Quas obcaecati consectetur voluptates, veniam nisi temporibus! Et laborum dolorem facere delectus neque animi ullam consequatur atque, autem tempore impedit rerum, soluta excepturi! Dicta excepturi voluptas porro, repellat omnis error magnam natus hic fugiat officiis nam iure adipisci quis ad minima eius quos ratione temporibus.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur temporibus quidem enim illo ipsa voluptatibus, qui voluptates necessitatibus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur temporibus quidem enim illo ipsa voluptatibus, qui voluptates necessitatibus eveniet quaerat optio voluptate cumque ad dolor dolores repellendus praesentium quod facere neque labore libero? Optio facere delectus id adipisci. Fugiat nulla amet cupiditate nostrum odio porro enim dolorum quo. At et officiis rem corporis! Nulla, officia. Quas obcaecati consectetur voluptates, veniam nisi temporibus! Et laborum dolorem facere delectus neque animi ullam consequatur atque, autem tempore impedit rerum, soluta excepturi! Dicta excepturi voluptas porro, repellat omnis error magnam natus hic fugiat officiis nam iure adipisci quis ad minima eius quos ratione temporibus.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
