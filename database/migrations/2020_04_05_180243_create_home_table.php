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
            $table->char("province_code", 2)->collation("utf8_unicode_ci");
            $table->char("regency_code", 4)->collation("utf8_unicode_ci");
            $table->char("district_code", 7)->collation("utf8_unicode_ci");
            $table->char("subdistrict_code", 10)->collation("utf8_unicode_ci");
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
