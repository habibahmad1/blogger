<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Fu Xuan',
        //     'email' => 'fuxuan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        User::create([
            'name' => 'Himeko',
            'username' => 'himeko',
            'email' => 'himeko@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'News',
            'slug' => 'news',
        ]);

        Category::create([
            'name' => 'Anime',
            'slug' => 'anime',
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Post::factory(30)->create();

        // Post::create([
        //     'title' => 'Post Pertama',
        //     'slug' => 'post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio illo voluptates, quasi molestiae hic modi, facilis pariatur',
        //     'body' => '<p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio illo voluptates, quasi molestiae hic modi, facilis pariatur nulla accusamus suscipit inventore tempora eveniet assumenda itaque.</p> <p> culpa nobis repellendus doloribus nesciunt totam eos odit debitis minus magni! Neque ducimus officia minus eligendi nostrum nisi ea aspernatur ab autem, ipsam, aut, ad ut. Quis minima tenetur, rerum numquam voluptatibus blanditiis ipsum natus exercitationem, tempora quae consequatur cumque illum amet expedita totam incidunt.</p> <p>deleniti molestias dolorum. Aspernatur corrupti mollitia dolorum nostrum impedit doloribus perferendis cum asperiores inventore nobis? Dicta accusamus iste dignissimos maxime vero dolorum ipsum? Necessitatibus placeat, eaque sapiente eveniet, </p> <p>reiciendis deserunt obcaecati quae pariatur debitis quo a inventore? Quasi, placeat labore ipsa doloremque adipisci itaque ducimus suscipit aperiam voluptate consequatur magnam, repellendus culpa voluptas tempore nesciunt eos sunt nisi? Quae error eos incidunt beatae rerum ducimus id quas ea perspiciatis ab nulla voluptatibus quod, autem rem culpa quo, nam minima aliquam?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Post Kedua',
        //     'slug' => 'post-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio illo voluptates, quasi molestiae hic modi, facilis pariatur',
        //     'body' => '<p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio illo voluptates, quasi molestiae hic modi, facilis pariatur nulla accusamus suscipit inventore tempora eveniet assumenda itaque.</p> <p> culpa nobis repellendus doloribus nesciunt totam eos odit debitis minus magni! Neque ducimus officia minus eligendi nostrum nisi ea aspernatur ab autem, ipsam, aut, ad ut. Quis minima tenetur, rerum numquam voluptatibus blanditiis ipsum natus exercitationem, tempora quae consequatur cumque illum amet expedita totam incidunt.</p> <p>deleniti molestias dolorum. Aspernatur corrupti mollitia dolorum nostrum impedit doloribus perferendis cum asperiores inventore nobis? Dicta accusamus iste dignissimos maxime vero dolorum ipsum? Necessitatibus placeat, eaque sapiente eveniet, </p> <p>reiciendis deserunt obcaecati quae pariatur debitis quo a inventore? Quasi, placeat labore ipsa doloremque adipisci itaque ducimus suscipit aperiam voluptate consequatur magnam, repellendus culpa voluptas tempore nesciunt eos sunt nisi? Quae error eos incidunt beatae rerum ducimus id quas ea perspiciatis ab nulla voluptatibus quod, autem rem culpa quo, nam minima aliquam?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Post Ketiga',
        //     'slug' => 'post-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio illo voluptates, quasi molestiae hic modi, facilis pariatur',
        //     'body' => '<p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio illo voluptates, quasi molestiae hic modi, facilis pariatur nulla accusamus suscipit inventore tempora eveniet assumenda itaque.</p> <p> culpa nobis repellendus doloribus nesciunt totam eos odit debitis minus magni! Neque ducimus officia minus eligendi nostrum nisi ea aspernatur ab autem, ipsam, aut, ad ut. Quis minima tenetur, rerum numquam voluptatibus blanditiis ipsum natus exercitationem, tempora quae consequatur cumque illum amet expedita totam incidunt.</p> <p>deleniti molestias dolorum. Aspernatur corrupti mollitia dolorum nostrum impedit doloribus perferendis cum asperiores inventore nobis? Dicta accusamus iste dignissimos maxime vero dolorum ipsum? Necessitatibus placeat, eaque sapiente eveniet, </p> <p>reiciendis deserunt obcaecati quae pariatur debitis quo a inventore? Quasi, placeat labore ipsa doloremque adipisci itaque ducimus suscipit aperiam voluptate consequatur magnam, repellendus culpa voluptas tempore nesciunt eos sunt nisi? Quae error eos incidunt beatae rerum ducimus id quas ea perspiciatis ab nulla voluptatibus quod, autem rem culpa quo, nam minima aliquam?</p>',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
