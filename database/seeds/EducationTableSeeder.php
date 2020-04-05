<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("education")->insert([
            [
                "name" => "RA",
                "status" => "F"
            ],
            [
                "name" => "MI",
                "status" => "F"
            ],
            [
                "name" => "TK",
                "status" => "F"
            ],
            [
                "name" => "SD",
                "status" => "F"
            ],
            [
                "name" => "PDF Ula",
                "status" => "F"
            ],
            [
                "name" => "M Ula",
                "status" => "F"
            ],
            [
                "name" => "MTs",
                "status" => "F"
            ],
            [
                "name" => "SMP",
                "status" => "F"
            ],
            [
                "name" => "PDF Wust",
                "status" => "F"
            ],
            [
                "name" => "M Wust",
                "status" => "F"
            ],
            [
                "name" => "MA",
                "status" => "F"
            ],
            [
                "name" => "SMA",
                "status" => "F"
            ],
            [
                "name" => "SMK",
                "status" => "F"
            ],
            [
                "name" => "PDF Ulya",
                "status" => "F"
            ],
            [
                "name" => "M Ulya",
                "status" => "F"
            ],
            [
                "name" => "PT Islam",
                "status" => "F"
            ],
            [
                "name" => "PT Umum",
                "status" => "F"
            ],
            [
                "name" => "WD Ulla",
                "status" => "NF"
            ],
            [
                "name" => "WD Wustha",
                "status" => "NF"
            ],
            [
                "name" => "PMU",
                "status" => "NF"
            ],
            [
                "name" => "MDT",
                "status" => "NF"
            ],
            [
                "name" => "Pendidikan Al-Qur\'an",
                "status" => "NF"
            ],
            [
                "name" => "Hanya Mengaji",
                "status" => "NF"
            ],
        ]);
    }
}
