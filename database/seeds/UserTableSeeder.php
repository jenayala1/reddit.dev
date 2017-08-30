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
            for ($i = 1; $i <= 10; $i++)
            {
                $users[] = [
                    'name'=> $faker->name,
                    'email'=> $faker->email,
                    'password'=> Hash::make('password'),
                    'created_at'=> $faker->dateTime(),
                    'updated_at'=> $faker->dateTime()
                ];
            }
            DB::table('users')->insert($users);
    }
}
