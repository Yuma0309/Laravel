<?php
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('people')->insert([
            'name' =>'YAMADA-TARO',
            'mail' => 'taro@yamada',
            'age' => 34,
        ]);

        // ……必要なだけ記述……
    }
}