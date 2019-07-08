<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('baseline_start');
            $table->dateTime('baseline_end');
            $table->dateTime('actual_start');
            $table->dateTime('actual_end');
            $table->smallInteger('complexity_id')->unsigned();
            $table->bigInteger('process_element_id')->unsigned();
            $table->bigInteger('structure_element_id')->unsigned();

            $table->timestamps();

            $table->foreign('complexity_id')->references('id')->on('complexities');
            $table->foreign('process_element_id')->references('id')->on('process_elements');
            $table->foreign('structure_element_id')->references('id')->on('structure_elements');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
