<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $genres = [
            'Pop', 'Rap & HipHop', 'Rock', 'Classica', 'Elettronica', 'Jazz', 'Blues', 'Gospel',
            'Soul', 'Country', 'Disco', 'Salsa', 'Raggae', 'Techno', 'Flamenco', 'Raggaeton', 'Funk', 'Indie',
            'Metal'
        ];

        $singer_name = [
            'Rick Novak', 'Susan Connor', 'Margaret Adelman', 'Ronald Barr',
            'Marie Broadlet', 'Roger Lum', 'Marlene Donalhue', 'Jeff Johnson', 'Melvin Forbis'
        ];


        for ($i = 0; $i < 30; $i++) {
            $newAlbum = new Album();
            $newAlbum->singer_name = $faker->randomElement($singer_name);
            $newAlbum->title = $faker->unique()->Words(2, true);
            $newAlbum->slug = $faker->slug();
            $newAlbum->genres = $faker->randomElement($genres);
            $newAlbum->songs_number = $faker->numberBetween(8, 15);
            $newAlbum->imageUrl = $faker->imageUrl(250, 200, 'Album', true, 'albums', true, 'png');
            $newAlbum->save();
        }
    }
}
