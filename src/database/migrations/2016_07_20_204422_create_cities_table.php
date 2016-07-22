<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function(Blueprint $table)
        {
            $table->increments('id');
            $table->char('country_code', 2);
            $table->integer('region_id')->unsigned();
            $table->boolean('active')->default(1);
            $table->string('name');
            $table->string('slug');

            $table->foreign('country_code')->references('code')->on('countries')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cities');
    }
}
