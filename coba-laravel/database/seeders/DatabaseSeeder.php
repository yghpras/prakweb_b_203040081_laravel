<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Foundation\Auth\User as AuthUser;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        AuthUser::create([
            'name' => 'Yoghi Prasetiyo',
            'email' => 'yoghi.203040081@mail.unpas.ac.id',
            'password' => bcsqrt('12345')
        ]);

        AuthUser::create([
            'name' => 'OkyBoy',
            'email' => 'oky@gmail.com',
            'password' => bcsqrt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam id veritatis eveniet, vitae quas incidunt et tempore laborum dolore doloribus molestiae quo ad est perferendis itaque accusantium a illo sapiente.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam id veritatis eveniet, vitae quas incidunt et tempore laborum dolore doloribus molestiae quo ad est perferendis itaque accusantium a illo sapiente.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam id veritatis eveniet, vitae quas incidunt et tempore laborum dolore doloribus molestiae quo ad est perferendis itaque accusantium a illo sapiente.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam id veritatis eveniet, vitae quas incidunt et tempore laborum dolore doloribus molestiae quo ad est perferendis itaque accusantium a illo sapiente.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
