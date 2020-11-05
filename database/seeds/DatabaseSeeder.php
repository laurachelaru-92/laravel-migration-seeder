<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorsTableSeeder::class);
        $this->call(AuthorsInfoTableSeeder::class);
        $this->call(ComicsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
    }
}
