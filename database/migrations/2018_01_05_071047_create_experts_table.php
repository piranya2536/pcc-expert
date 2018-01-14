<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default(0);
            $table->string('id_card', 16);
            $table->string('title');
            $table->string('academic_pos');
            $table->string('fname_th');
            $table->string('lname_th');
            $table->string('fname_en');
            $table->string('lname_en');
            $table->string('gender', 8);
            $table->date('birthday');
            $table->string('nationality');
            $table->tinyInteger('bursary');
            $table->string('interesting');
            $table->string('image')->default('-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experts');
    }
}
