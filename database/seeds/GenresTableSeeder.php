<?php

use Illuminate\Database\Seeder;
use App\Genre;
use Faker\Generator as Faker;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $genres = [
        //     'fantasy',
        //     'horror',
        //     'drama',
        //     'action',
        //     'comedy',
        //     'sci-fi'
        // ];
        
        // foreach($genres as $genre) {
        //     $newGenre = new Genre;
        //     $newGenre->name = $genre;
        //     $newGenre->save();
        // }

        
        $counter = 0;

        while($counter < 10) {
            $fakerWord = $faker->word;
    
            $data = Genre::where("name", $fakerWord)->get();
            if($data->count() === 0) {
                $newGenre = new Genre;
                $newGenre->name = $fakerWord;
                $newGenre->save();
                $counter++;
            }
        }

    }
}
