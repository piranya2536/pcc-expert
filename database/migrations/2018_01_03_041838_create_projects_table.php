<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('projec_id');
            $table->longtext('pl_name');
            $table->string('ps_name');
            $table->string('ac_name');
            $table->longtext('short_desc');
            $table->date('s_date');
            $table->date('l_date');
            $table->string('fanding');
            $table->integer('y_fanding');
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
        Schema::dropIfExists('projects');
    }
}
