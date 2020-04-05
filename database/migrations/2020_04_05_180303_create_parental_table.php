<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parental', function (Blueprint $table) {
            $table->id();
            $table->string("parental_id", 100);
            $table->string("name");
            $table->string("nik", 100);
            $table->unsignedBigInteger("education")->nullable();
            $table->string("job", 50)->nullable();
            $table->enum("role", ["F", "M"]);
            $table->foreign("parental_id")->references("nkk")->on("home");
            $table->foreign("education")->references("id")->on("education");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parental');
    }
}
