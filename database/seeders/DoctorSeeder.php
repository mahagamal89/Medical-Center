<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Medical center Alhayat
        DB::table('doctors')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'specialist' => Str::random(10),
            'mobile_number' => Str::random(11),
            'medical_center_id' => 1,
        ]);

        DB::table('doctors')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'specialist' => Str::random(10),
            'mobile_number' => Str::random(11),
            'medical_center_id' => 1,
        ]);

        // Medical Center AlNour
        DB::table('doctors')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'specialist' => Str::random(10),
            'mobile_number' => Str::random(11),
            'medical_center_id' => 2,
        ]);

        DB::table('doctors')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'specialist' => Str::random(10),
            'mobile_number' => Str::random(11),
            'medical_center_id' => 2,
        ]);
    }
}
