<?php

use Illuminate\Database\Seeder;
use App\AuthorsInfo;
use App\Author;
use Faker\Generator as Faker;

class AuthorsInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $authors = Author::all();

        foreach($authors as $author) {
            $newAuthorsInfo = new AuthorsInfo;
            $newAuthorsInfo->author_id = DB::table('authors')->inRandomOrder('id')->first();

        }
    }
}
