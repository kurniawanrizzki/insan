<?php

use Illuminate\Database\Seeder;

class MainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("main")->insert([
            "nspp" => "510033280003",
            "name" => "Attauhidiyah Syekh Armia Bin Kurdi",
            "phone_number" => "085314239181",
            "address" => "Cikura RT 001, RW 002",
            "province_code" => "33",
            "regency_code" => "3328",
            "district_code" => "3328030",
            "subdistrict_code" => "3328030017",
            "zip_code" => "52465"
        ]);
    }
}
