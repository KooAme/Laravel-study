<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {// Authors테이블에 레코드를 10건 등록한다
        $faker = \Faker\Factory::create();
        for($i = 1; $i <= 10; $i++){
            $author = [
                'name' =>$faker->email,
                // 'name' => 'author' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            \Illuminate\Support\Facades\DB::table('authors')->insert($author);
            //쿼리 빌더 ** 스키마빌더와 다름
        }
    }
}
