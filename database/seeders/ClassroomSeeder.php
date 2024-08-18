<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\ClassRoom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        //disable foregeinkey
        Schema::disableForegeinKeyContraints();
        //mengosongkan isi table
        ClassRoom::truncate();
        //eneble foregeinkey
        Schema::enableForegeinKeyContraints();
        $data = [
            [
                'name' => '12 TP A',
            ],
            [
                'name' => '12 TP B',
            ],
            [
                'name' => '12 TP C',
            ],

        ];
        //multiple insert
        foreach ($data as $value) {
            ClassRoom::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
        // insert into class value..
        // 1. eloquent ORM (rekomendasi)

        // 2. query builder
        //DB::table('class')->insert([
        //    'name' => '12 TKJ B',
        //    'created_at' => Carbon::now(),
        //    'updated_at' => Carbon::now()
        //]);
        // 3. raw query
        //membuat dta untuk table class


    }
}
