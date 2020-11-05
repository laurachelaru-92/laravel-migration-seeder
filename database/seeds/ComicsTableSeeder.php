<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;
use App\Author;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $comic = new Comic;

            $randomAuthor = Author::inRandomOrder()->first();
            $comic->author_id = $randomAuthor->id;
            $comic->title = $faker->text(30);
            if(rand(0,1) == 1) {
                $comic->original_title = $faker->text(30);
            }
            $comic->author = $faker->name();
            $comic->pages = $faker->numberBetween(20, 200);
            $comic->release = $faker->year();
            if((rand(0,5) >= 0) && (rand(0,5) <= 2)) {
                $comic->price = $faker->randomFloat(2, 1, 20,99);
            } elseif((rand(0,5) == 3) || (rand(0,5) == 4)) {
                $comic->price = $faker->randomFloat(2, 21, 100,99);
            } else {
                $comic->price = $faker->randomFloat(2, 101, 9999,99);
            }
            $comic->reading_direction = rand(0,2) == 0 ? "rtl" : "ltr";
            $comic->cover = $faker->imageUrl(200, 300);
            $comic->save();
        }
    }
}
