<?php

namespace Database\Seeders;

use App\Models\Komik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Komik::factory(10)->create();
        // $komiks = [
        //     [
        //         'id' => '1',
        //         'nama' => 'Attack On Titan',
        //         'genre' => 'Action, Slice Of Life',
        //         'rating' => '10',
        //     ],
        //     [
        //         'id' => '2',
        //         'nama' => 'Jujutsu Kaisen',
        //         'genre' => 'Fantasy, Action',
        //         'rating' => '8',
        //     ]
        // ];

        // foreach ($komiks as $komik) {
        //     Komik::create([
        //         'id' => $komik['id'],
        //         'nama' => $komik['nama'],
        //         'genre' => $komik['genre'],
        //         'rating' => $komik['rating'],
        //     ]);
        // }
    }
}
