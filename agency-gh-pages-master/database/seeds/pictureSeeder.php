<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class pictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  
    public function run()
    {

        $img = [ '',
        '/g (1).jpg',
        '/g (2).jpg',
        '/g (3).jpg',
        '/g (4).jpg',
        ];

        for ($i=1; $i <  5; $i++) {
            DB::table('picture')->insert([
            'path' => 'album'. $img[$i],
            'gallery_id'  => 1,
              'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
