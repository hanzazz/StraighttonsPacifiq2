<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class gallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $link = ['',
        'https://www.youtube.com/embed/iv46-lkP8WQ',
        'https://www.youtube.com/embed/bmA-eYBn1Hg',
        'https://www.youtube.com/embed/I4JsF885kLQ',
        'https://www.youtube.com/embed/7g6Sf6qByls',
        'https://www.youtube.com/embed/9BYEXNvEET8',
        'https://www.youtube.com/embed/HDfvLwJo-5g',
        'https://www.youtube.com/embed/eyKfd0Hd9lE',
        'https://www.youtube.com/embed/XbsrbQXUm7E',
        'https://www.youtube.com/embed/JHa4JeV9v0o',
        'https://www.youtube.com/embed/JHa4JeV9v0o',
        'https://www.youtube.com/embed/XbsrbQXUm7E',
        'https://www.youtube.com/embed/XbsrbQXUm7E',
        'https://www.youtube.com/embed/XbsrbQXUm7E',
        'https://www.youtube.com/embed/XbsrbQXUm7E',
    ];
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
            DB::table('gallery')->insert([
            'img'      => 'imgOfalbum'. $img[$i],
              'title'  => 'แตกใน '.$i,
            'content' => 'เย็ดท่ายาก',
            'link' => $link[$i],
              'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }

    }
}
