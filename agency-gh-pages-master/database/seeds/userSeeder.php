<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'admin',
            'tell'      => '0811892429',
            'email'  => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'role' => 1,
              'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            ]);
    }
}
