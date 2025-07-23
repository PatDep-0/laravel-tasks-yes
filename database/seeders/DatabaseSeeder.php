<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed artists
        DB::table('artists')->insert([
            ['artistID' => 'AR01', 'artistName' => 'Against the Current'],
            ['artistID' => 'AR02', 'artistName' => 'Taylor Swift'],
            ['artistID' => 'AR03', 'artistName' => 'Sleeping with Sirens'],
            ['artistID' => 'AR04', 'artistName' => 'Ashley Alisha'],
            ['artistID' => 'AR05', 'artistName' => 'Joshua Bassett'],
            ['artistID' => 'AR06', 'artistName' => 'SEVENTEEN'],
            ['artistID' => 'AR07', 'artistName' => 'TXT'],
            ['artistID' => 'AR08', 'artistName' => 'Engelbert Humperdinck'],
            ['artistID' => 'AR09', 'artistName' => 'Bon Jovi'],
            ['artistID' => 'AR10', 'artistName' => 'The Firehouse'],
            ['artistID' => 'AR11', 'artistName' => 'Juan Karlos'],
            ['artistID' => 'AR12', 'artistName' => 'Neffex'],
            ['artistID' => 'AR13', 'artistName' => 'Craig David'],
            ['artistID' => 'AR14', 'artistName' => 'Boys Like Girls'],
            ['artistID' => 'AR15', 'artistName' => 'My Chemical Romance'],
            ['artistID' => 'AR16', 'artistName' => 'Panic! At The Disco'],
            ['artistID' => 'AR17', 'artistName' => 'Simple Plan'],
            ['artistID' => 'AR18', 'artistName' => 'Evanescence'],
            ['artistID' => 'AR19', 'artistName' => 'Frank Sinatra'],
            ['artistID' => 'AR20', 'artistName' => 'Phil Collins'],
        ]);

        // Seed albums
        DB::table('albums')->insert([
            ['albumID' => 'AL01', 'albumTitle' => 'Speak Now', 'artistID' => 'AR02'],
            ['albumID' => 'AL02', 'albumTitle' => 'With Ears to See and Eyes to Hear', 'artistID' => 'AR03'],
            ['albumID' => 'AL03', 'albumTitle' => 'Your Choice', 'artistID' => 'AR06'],
            ['albumID' => 'AL04', 'albumTitle' => 'The Dream Chapter: MAGIC', 'artistID' => 'AR07'],
            ['albumID' => 'AL05', 'albumTitle' => 'The Black Parade', 'artistID' => 'AR15'],
            ['albumID' => 'AL06', 'albumTitle' => 'Still Not Getting Any...', 'artistID' => 'AR17'],
            ['albumID' => 'AL07', 'albumTitle' => 'The Open Door', 'artistID' => 'AR18'],
        ]);

        // Seed songs
        DB::table('songs')->insert([
            ['songID' => 'SO01', 'songTitle' => 'Guessing', 'artistID' => 'AR01', 'albumID' => null],
            ['songID' => 'SO02', 'songTitle' => 'Sparks Fly', 'artistID' => 'AR02', 'albumID' => 'AL01'],
            ['songID' => 'SO03', 'songTitle' => 'Scene 1: With Ears to See and Eyes to Hear', 'artistID' => 'AR03', 'albumID' => 'AL02'],
            ['songID' => 'SO04', 'songTitle' => 'Clues', 'artistID' => 'AR04', 'albumID' => null],
            ['songID' => 'SO05', 'songTitle' => 'Anyone Else', 'artistID' => 'AR05', 'albumID' => null],
            ['songID' => 'SO06', 'songTitle' => 'Same Dream, Same Mind, Same Night', 'artistID' => 'AR06', 'albumID' => 'AL03'],
            ['songID' => 'SO07', 'songTitle' => '20cm', 'artistID' => 'AR07', 'albumID' => 'AL04'],
            ['songID' => 'SO08', 'songTitle' => 'A man without love', 'artistID' => 'AR08', 'albumID' => null],
            ['songID' => 'SO09', 'songTitle' => 'Bed of roses', 'artistID' => 'AR09', 'albumID' => null],
            ['songID' => 'SO10', 'songTitle' => 'You are my religion', 'artistID' => 'AR10', 'albumID' => null],
            ['songID' => 'SO11', 'songTitle' => 'Buwan', 'artistID' => 'AR11', 'albumID' => null],
            ['songID' => 'SO12', 'songTitle' => 'Soldier', 'artistID' => 'AR12', 'albumID' => null],
            ['songID' => 'SO13', 'songTitle' => 'Insomnia', 'artistID' => 'AR13', 'albumID' => null],
            ['songID' => 'SO14', 'songTitle' => 'Two is Better than one', 'artistID' => 'AR14', 'albumID' => null],
            ['songID' => 'SO15', 'songTitle' => 'Welcome to the Black Parade', 'artistID' => 'AR15', 'albumID' => 'AL05'],
            ['songID' => 'SO16', 'songTitle' => 'House of Memories', 'artistID' => 'AR16', 'albumID' => null],
            ['songID' => 'SO17', 'songTitle' => 'Welcome to My Life', 'artistID' => 'AR17', 'albumID' => 'AL06'],
            ['songID' => 'SO18', 'songTitle' => 'Sweet Sacrifice', 'artistID' => 'AR18', 'albumID' => 'AL07'],
            ['songID' => 'SO19', 'songTitle' => 'Fly Me to The Moon', 'artistID' => 'AR19', 'albumID' => null],
            ['songID' => 'SO20', 'songTitle' => 'Youll Be In My Heart', 'artistID' => 'AR20', 'albumID' => null],
        ]);
    }
}
