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
            $table->string("phone_number", 15);
            $table->char("province_code", 2)->collation("utf8_unicode_ci");
            $table->char("regency_code", 4)->collation("utf8_unicode_ci");
            $table->char("district_code", 7)->collation("utf8_unicode_ci");
            $table->char("subdistrict_code", 10)->collation("utf8_unicode_ci");
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
