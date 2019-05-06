<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class articleSeeder extends Seeder
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
        '/g (1).png',
        '/g (2).jpg',
        '/g (2).png',
        '/g (3).png',
        '/g (3).jpg',
        '/g (4).jpg',
        '/g (5).jpg',
        '/g (5).png',
        '/g (6).jpg',
        '/g (7).jpg',
        '/g (8).jpg',
        '/g (9).jpg',
        '/g (10).jpg',
      
        ];

        for ($i=1; $i < 14; $i++) {
            DB::table('article')->insert([
              'title'  => 'แตกใน '.$i,
              'content' => 'เย็ดท่ายาก',
              'path_pic'      => 'article'.$img[$i],
              'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
