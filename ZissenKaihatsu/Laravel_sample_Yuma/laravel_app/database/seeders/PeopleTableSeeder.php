<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
