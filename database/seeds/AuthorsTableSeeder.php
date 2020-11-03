<?php

use Illuminate\Database\Seeder;
use App\Author;
use Faker\Generator as Faker;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $newAuthor = new Author;
            $newAuthor->name = $faker->firstname(20);
            $newAuthor->lastname = $faker->lastname(30);
            $newAuthor->date_of_birth = $faker->dateTimeBetween('-60 years', '-20 years');
            $newAuthor->save();
        }
    }
}
