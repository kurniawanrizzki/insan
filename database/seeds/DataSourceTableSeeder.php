<?php

use Illuminate\Database\Seeder;

class DataSourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("data_source")->insert([
            [
                "source" => "strata",
                "attributes" => "[\"<= SLTP\", \"SLTA\", \"D1\", \"D2\", \"D3\", \"D4\", \"S1\", \"S2\", \"S3\"]"
            ],
            [
                "source" => "ownership",
                "attributes" => "[\"Milik Orang Tua\", \"Milik Saudara\", \"Menumpang\", \"Sewa / Kontrak\"]"
            ],
            [
                "source" => "incoming",
                "attributes" => "[\"Rp. 500.000,- atau kurang\", \"Rp. 500.000,- - Rp. 1.000.000,-\", \"Rp. 1.000.000,- - Rp. 2.000.000,-\", \"Rp. 2.000.000,- - Rp. 3.000.000,-\", \"Rp. 3.000.000,- - Rp. 5.000.000,-\", \"Lebih dari Rp. 5.000.000,-\"]"
            ],
            [
                "source" => "floor",
                "attributes" => "[\"Tanah\", \"Bambu / Kayu\", \"Tembok plester\", \"Keramik / Granit\"]"
            ],
            [
                "source" => "wall",
                "attributes" => "[\"Bambu / Kayu\", \"Rumbia\", \"Tembok Tanpa Plester\", \"Tembok Plester\"]"
            ],
            [
                "source" => "electricity",
                "attributes" => "[\"PLN\", \"Genset\", \"Sumber Listrik Lain\", \"Belum Ada Listrik\"]"
            ],
            [
                "source" => "water",
                "attributes" => "[\"PAM\", \"Air Sumur\", \"Air Sungai\", \"Air Hujan\"]"
            ]
        ]);
    }
}
