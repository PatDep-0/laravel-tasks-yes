<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed artists
        DB::table('artists')->insert([
            ['artistID' => 'AR01', 'artistName' => 'Against the Current', 'artistImage' => 'public\images\against_the_current.jpg'],
            ['artistID' => 'AR02', 'artistName' => 'Taylor Swift', 'artistImage' => 'public\images\taylor_swift.jpg'],
            ['artistID' => 'AR03', 'artistName' => 'Sleeping with Sirens', 'artistImage' => 'public\images\sleeping_with_sirens.jpg'],
            ['artistID' => 'AR04', 'artistName' => 'Ashley Alisha', 'artistImage' => 'public\images\ashley_alisha.jpg'],
            ['artistID' => 'AR05', 'artistName' => 'Joshua Bassett', 'artistImage' => 'public\images\joshua_bassett.jpg'],
            ['artistID' => 'AR06', 'artistName' => 'SEVENTEEN', 'artistImage' => 'public\images\seventeen.jpg'],
            ['artistID' => 'AR07', 'artistName' => 'TXT', 'artistImage' => 'public\images\txt.jpg'],
            ['artistID' => 'AR08', 'artistName' => 'Engelbert Humperdinck', 'artistImage' => 'public\images\engelbert.jpg'],
            ['artistID' => 'AR09', 'artistName' => 'Bon Jovi', 'artistImage' => 'public\images\bon_jovi.jpg'],
            ['artistID' => 'AR10', 'artistName' => 'The Firehouse', 'artistImage' => 'public\images\firehouse.jpg'],
            ['artistID' => 'AR11', 'artistName' => 'Juan Karlos', 'artistImage' => 'public\images\juan_karlos.jpg'],
            ['artistID' => 'AR12', 'artistName' => 'Neffex', 'artistImage' => 'public\images\neffex.jpg'],
            ['artistID' => 'AR13', 'artistName' => 'Craig David', 'artistImage' => 'public\images\craig_david.jpg'],
            ['artistID' => 'AR14', 'artistName' => 'Boys Like Girls', 'artistImage' => 'public\images\boys_like_girls.jpg'],
            ['artistID' => 'AR15', 'artistName' => 'My Chemical Romance', 'artistImage' => 'public\images\mcr.jpg'],
            ['artistID' => 'AR16', 'artistName' => 'Panic! At The Disco', 'artistImage' => 'public\images\patd.jpg'],
            ['artistID' => 'AR17', 'artistName' => 'Simple Plan', 'artistImage' => 'public\images\simple_plan.jpg'],
            ['artistID' => 'AR18', 'artistName' => 'Evanescence', 'artistImage' => 'public\images\evanescence.jpg'],
            ['artistID' => 'AR19', 'artistName' => 'Frank Sinatra', 'artistImage' => 'public\images\frank_sinatra.jpg'],
            ['artistID' => 'AR20', 'artistName' => 'Phil Collins', 'artistImage' => 'public\images\phil_collins.jpg'],
        ]);



        // Seed songs
        DB::table('songs')->insert([
            ['songID' => 'SO01', 'songTitle' => 'Guessing', 'artistID' => 'AR01'],
            ['songID' => 'SO02', 'songTitle' => 'Sparks Fly', 'artistID' => 'AR02'],
            ['songID' => 'SO03', 'songTitle' => 'Scene 1: With Ears to See and Eyes to Hear', 'artistID' => 'AR03'],
            ['songID' => 'SO04', 'songTitle' => 'Clues', 'artistID' => 'AR04'],
            ['songID' => 'SO05', 'songTitle' => 'Anyone Else', 'artistID' => 'AR05'],
            ['songID' => 'SO06', 'songTitle' => 'Same Dream, Same Mind, Same Night', 'artistID' => 'AR06'],
            ['songID' => 'SO07', 'songTitle' => '20cm', 'artistID' => 'AR07'],
            ['songID' => 'SO08', 'songTitle' => 'A man without love', 'artistID' => 'AR08'],
            ['songID' => 'SO09', 'songTitle' => 'Bed of roses', 'artistID' => 'AR09'],
            ['songID' => 'SO10', 'songTitle' => 'You are my religion', 'artistID' => 'AR10'],
            ['songID' => 'SO11', 'songTitle' => 'Buwan', 'artistID' => 'AR11'],
            ['songID' => 'SO12', 'songTitle' => 'Soldier', 'artistID' => 'AR12'],
            ['songID' => 'SO13', 'songTitle' => 'Insomnia', 'artistID' => 'AR13'],
            ['songID' => 'SO14', 'songTitle' => 'Two is Better than one', 'artistID' => 'AR14'],
            ['songID' => 'SO15', 'songTitle' => 'Welcome to the Black Parade', 'artistID' => 'AR15'],
            ['songID' => 'SO16', 'songTitle' => 'House of Memories', 'artistID' => 'AR16'],
            ['songID' => 'SO17', 'songTitle' => 'Welcome to My Life', 'artistID' => 'AR17'],
            ['songID' => 'SO18', 'songTitle' => 'Sweet Sacrifice', 'artistID' => 'AR18'],
            ['songID' => 'SO19', 'songTitle' => 'Fly Me to The Moon', 'artistID' => 'AR19'],
            ['songID' => 'SO20', 'songTitle' => 'Youll Be In My Heart', 'artistID' => 'AR20'],
        ]);
    }
}
