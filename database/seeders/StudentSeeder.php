<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                'name' => 'Rey',
                'student_id_number' => 'F55122079',
                'email' => 'rey@gmail.com',
                'phone_number' => '6281234567891',
                'birth_date' => '2005-07-03',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Aditya',
                'student_id_number' => 'F55122080',
                'email' => 'adit@gmail.com',
                'phone_number' => '6281234556677',
                'birth_date' => '2005-02-27',
                'gender' => 'Male',
                'status' => 'Inactive',
                'major_id' => 2,
            ],
        ]);
    }
}
