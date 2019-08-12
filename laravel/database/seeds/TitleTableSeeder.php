<?php

use Illuminate\Database\Seeder;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('title')->insert([
            'file' =>"01B01.jpg" ,
            'title' =>"科技大學校園資訊網" ,
            'sh' =>"checked",
        ]);
        DB::table('title')->insert([
            'file' =>"01B02.jpg" ,
            'title' =>"泰山學校園資訊網" ,
            'sh' =>"",
        ]);
    }
}
