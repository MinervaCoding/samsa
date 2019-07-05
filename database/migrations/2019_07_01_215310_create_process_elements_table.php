<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_elements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->bigInteger('process_element_type_id')->unsigned();
            $table->bigInteger('process_phase_id')->unsigned();
            $table->bigInteger('department_id')->unsigned();
            $table->foreign('process_element_type_id')->references('id')->on('process_element_types');
            $table->foreign('process_phase_id')->references('id')->on('process_phases');
            $table->foreign('department_id')->references('id')->on('departments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('process_elements');
    }
}
