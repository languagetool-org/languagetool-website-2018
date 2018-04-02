<?php

use App\User;
use Faker\Factory;
use App\IgnoreWord;
use Faker\Generator;
use Illuminate\Database\Seeder;

class IgnoreWordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (IgnoreWord::count() == 0) {
            $users = User::all();
			$faker = Factory::create();
            foreach ($users as $user) {
                for ($counter=0; $counter < 100; $counter++) { 
                    IgnoreWord::create([
                        'ignore_word'    => $faker->name,
                        'user_id'        => $user->id,
                    ]);
                }
            }
        }
    }
}
