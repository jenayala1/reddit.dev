<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i <= 50; $i++)
        {
            $posts[] = [
                    'url' => $faker->url,
                    'title' => $faker->catchPhrase,
                    'content' => $faker->text,
                    'created_by' => \App\User::all()->random()->id,
                    'created_at'=> $faker->dateTime(),
                    'updated_at'=> $faker->dateTime()
            ];
        }
         DB::table('posts')->insert($posts);
     }

}
