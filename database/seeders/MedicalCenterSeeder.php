<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MedicalCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Medical Center Alhayat
        DB::table('medical_centers')->insert([
            'name' => 'Alhayat',
            'address' => 'Giza',
        ]);

        // Medical Center AlNour
        DB::table('medical_centers')->insert([
            'name' => 'AlNour',
            'address' => 'Alex',
        ]);
    }
}
