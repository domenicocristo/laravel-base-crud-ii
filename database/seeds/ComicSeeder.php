<?php

use Illuminate\Database\Seeder;

use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comic::class, 54) -> create();
    }
}