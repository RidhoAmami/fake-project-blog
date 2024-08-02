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
        //\App\Models\User::factory(10)->create();
        User::create([
            'name'=>'Sandika Galih',
            'email'=>'sandika@gmail.com',
            'password'=>bcrypt('12345')
        ]);

        User::create([
            'name'=>'Doddy Ferdiansyah',
            'email'=>'doddy@gmail.com',
            'password'=>bcrypt('12345')
        ]);

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Post::create([
            'title'=>'Pertama',
            'slug'=>'judul-pertama',
            'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus exercitationem officia cupiditate temporibus doloribus.',
            'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus exercitationem officia cupiditate temporibus doloribus. Quae esse est tenetur, quas laboriosam dolor laudantium illum id perspiciatis, dolorem architecto sequi aliquid voluptate cumque? Quis eius eos officia perferendis temporibus laborum at voluptatem nam voluptas rerum! Consequuntur dolore explicabo commodi obcaecati accusamus asperiores recusandae totam soluta modi, corporis adipisci quidem itaque placeat. Necessitatibus aut at facilis! Consectetur error accusamus deserunt similique, fuga unde! Voluptas maiores nostrum quidem neque dolore, ullam quis aliquid ad architecto autem placeat? Eveniet earum dolorum id non est, voluptatem nobis ab illo ut quis voluptatum possimus ullam ipsa ratione.',
            'category_id'=>1,
            'user_id'=>2
        ]);

        Post::create([
            'title'=>'Kedua',
            'slug'=>'judul-kedua',
            'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus exercitationem officia cupiditate temporibus doloribus.',
            'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus exercitationem officia cupiditate temporibus doloribus. Quae esse est tenetur, quas laboriosam dolor laudantium illum id perspiciatis, dolorem architecto sequi aliquid voluptate cumque? Quis eius eos officia perferendis temporibus laborum at voluptatem nam voluptas rerum! Consequuntur dolore explicabo commodi obcaecati accusamus asperiores recusandae totam soluta modi, corporis adipisci quidem itaque placeat. Necessitatibus aut at facilis! Consectetur error accusamus deserunt similique, fuga unde! Voluptas maiores nostrum quidem neque dolore, ullam quis aliquid ad architecto autem placeat? Eveniet earum dolorum id non est, voluptatem nobis ab illo ut quis voluptatum possimus ullam ipsa ratione.',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'Ketiga',
            'slug'=>'judul-ketiga',
            'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus exercitationem officia cupiditate temporibus doloribus.',
            'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus exercitationem officia cupiditate temporibus doloribus. Quae esse est tenetur, quas laboriosam dolor laudantium illum id perspiciatis, dolorem architecto sequi aliquid voluptate cumque? Quis eius eos officia perferendis temporibus laborum at voluptatem nam voluptas rerum! Consequuntur dolore explicabo commodi obcaecati accusamus asperiores recusandae totam soluta modi, corporis adipisci quidem itaque placeat. Necessitatibus aut at facilis! Consectetur error accusamus deserunt similique, fuga unde! Voluptas maiores nostrum quidem neque dolore, ullam quis aliquid ad architecto autem placeat? Eveniet earum dolorum id non est, voluptatem nobis ab illo ut quis voluptatum possimus ullam ipsa ratione.',
            'category_id'=>2,
            'user_id'=>1
        ]);
    }
}
