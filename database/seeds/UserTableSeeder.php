<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $users = [];
            $faker = Faker\Factory::create();
            for ($i = 0; $i <= 10; $i++)
            {
                $users[] = [
                    'name'=> $faker->name,
                    'email'=> $faker->safeEmail,
                    'password'=> $faker->password,
                ];
            }
            DB::table('users')->insert($users);
    }
}
