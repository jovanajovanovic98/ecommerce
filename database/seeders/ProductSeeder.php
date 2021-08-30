<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'SX SST-62 BK electric guitar',
                'price'=>'18.476,500',
                'description'=>' Perfect for many musical styles including rock, jazz, blues and Rock n roll.',
                'category'=>'guitar',
                'gallery'=>'https://images.musicstore.de/images/1280/rockson-st-electric-guitar-black_1_GIT0050069-000.jpg'
            ],
            [
                'name'=>'Cort G100 OP electric guitar',
                'price'=>'18.850,00',
                'description'=>'The G100 features a double cutaway body for classic styling, comfort, and easy access to the higher register of the fretboard.',
                'category'=>'guitar',
                'gallery'=>'https://images.musicstore.de/images/1280/esp-ltd-alexi-200-electric-guitar-_1_GIT0010399-000.jpg'
            ],
            [
                'name'=>'XDRUM Junior Drum Set Red',
                'price'=>'13.400,00',
                'description'=>'Wooden shells, 6-layers, with lamenated covering',
                'category'=>'drums',
                'gallery'=>'https://m.media-amazon.com/images/I/71HMCUed+tL._AC_SX425_.jpg'
            ],
            [
                'name'=>'Mapex Mars MA486SIW Mars 4-Piece 18" Bop Drum Set Birch Shell Pack - Driftwood',
                'price'=>'73.000,00',
                'description'=>'Featuring Birch shells with some unbelievable tones. Thanks to the new SONIClear bearing edge tuning is made much easier.',
                'category'=>'drums',
                'gallery'=>'https://img.kytary.com/eshop_ie/velky_v2/na/637540059917630000/60c4a4fb/64844064/roland-td-50kv2-v-drums.jpg'
            ]
        ]);
    }
}
