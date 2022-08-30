<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Song::create([
            'name' => 'Twilight'
        ]);

        Song::create([
            'name' => 'Objects in the rear view mirror may appear closer than they are'
        ]);
    }
}
