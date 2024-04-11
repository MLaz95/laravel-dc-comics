<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach($comics as $comic){

            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->artists = json_encode($comic['artists']);
            $newComic->writers = json_encode($comic['writers']);

            // $newComic->title = 'test';
            // $newComic->description = 'test';
            // $newComic->thumb = 'test';
            // $newComic->price = '19.99';
            // $newComic->series = 'test';
            // $newComic->sale_date = '2018-10-02';
            // $newComic->type = 'test';
            // $newComic->artists = ('["test", "a", "b"]');
            // $newComic->writers = ('["test", "a", "b"]');
    
            $newComic->save();
        }

    }
}
