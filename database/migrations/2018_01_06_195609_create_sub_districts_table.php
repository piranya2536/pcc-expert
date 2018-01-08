<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_districts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sub_district_code', 6);
            $table->string('sub_district_name', 150);
            $table->string('sub_district_name_en', 150);
            $table->string('zipcode', 5);
            $table->integer('district_id');
            $table->integer('province_id');
            $table->integer('geo_id');
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
        Schema::dropIfExists('sub_districts');
    }
}
