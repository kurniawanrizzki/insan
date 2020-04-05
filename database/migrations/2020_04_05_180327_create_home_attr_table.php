<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeAttrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_attr', function (Blueprint $table) {
            $table->id();
            $table->string("parental_id", 100);
            $table->string("key", 100);
            $table->string("val");
            $table->foreign("parental_id")->references("nkk")->on("home");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_attr');
    }
}
