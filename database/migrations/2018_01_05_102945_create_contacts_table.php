<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone')->nullable();
            $table->string('phone_list')->nullable();
            $table->string('fax')->nullable();
            $table->string('fax_list')->nullable();
            $table->string('mobile');
            $table->string('email');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('line')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
