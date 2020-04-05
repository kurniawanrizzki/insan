<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->string("nkk", 100);
            $table->unsignedBigInteger("santri_id")->unique();
            $table->string("kps_or_kks", 100);
            $table->string("phone_number", 15);
            $table->string("address");
            $table->unsignedBigInteger("province_code");
            $table->unsignedBigInteger("regency_code");
            $table->unsignedBigInteger("district_code");
            $table->unsignedBigInteger("subdistrict_code");
            $table->string("zip_code", 10);
            $table->float("average_monthly_income", 8);
            $table->tinyInteger("number_of_siblings")->default(0);
            $table->unsignedBigInteger("created_by");
            $table->unsignedBigInteger("updated_by");
            $table->timestamps();
            $table->primary("nkk");
            $table->foreign("santri_id")->references("id")->on("santri");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home');
    }
}
