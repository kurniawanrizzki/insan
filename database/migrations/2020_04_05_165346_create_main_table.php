<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main', function (Blueprint $table) {
            $table->string("nspp", 50)->unique();
            $table->string("name");
            $table->string("address");
            $table->unsignedBigInteger("province_code");
            $table->unsignedBigInteger("regency_code");
            $table->unsignedBigInteger("district_code");
            $table->unsignedBigInteger("subdistrict_code");
            $table->string("zip_code", 10);
            $table->primary("nspp");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main');
    }
}
