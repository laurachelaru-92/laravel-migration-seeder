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

            if($author->info == NULL) {
                $newAuthorsInfo = new AuthorsInfo;
                $newAuthorsInfo->author_id = $author->id;
                $newAuthorsInfo->nationality = $faker->country;
                if(rand(0,1) == 1) {
                    $newAuthorsInfo->alive = 1;
                    $newAuthorsInfo->image = $faker->imageUrl(150, 200);
                } else {
                    $newAuthorsInfo->alive = 0;
                    $newAuthorsInfo->image = "https://centennialinc.com/wp-content/uploads/sites/2/2018/09/tombstone.jpg";
                }
                $newAuthorsInfo->save();
            }
        }
    }

}
