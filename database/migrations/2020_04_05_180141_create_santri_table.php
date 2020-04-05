<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->id();
            $table->string("nip", 100);
            $table->string("nspp_id", 100)->unique();
            $table->string("name");
            $table->string("birth_place", 50);
            $table->date("birth_day");
            $table->enum("domicile",['R', "NR"]);
            $table->unsignedBigInteger("f_education_type")->nullable();
            $table->unsignedBigInteger("nf_education_type")->nullable();
            $table->longText("photo_path")->nullable();
            $table->tinyInteger("status")->default(1);
            $table->unsignedBigInteger("created_by");
            $table->unsignedBigInteger("updated_by");
            $table->timestamps();
            $table->foreign("f_education_type")->references("id")->on("education");
            $table->foreign("nf_education_type")->references("id")->on("education");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('santri');
    }
}
