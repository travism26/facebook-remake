<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-23
 * Time: 5:42 PM
 */

//namespace database\seeds;

use Faker\Factory as Faker;
//use Illuminate\Database\Seeder;
use Larabook\Users\User;

class UsersTableSeeder extends Seeder {
    /**
     *
     */
    public function run()
    {
        $faker = Faker::create();


        foreach (range(1, 50) as $index)
        {
            User::create([
                'username' => $faker->word . $index,
                'email' => $faker->email,
                'password'=> 'secret'
            ]);
        }
    }
} 