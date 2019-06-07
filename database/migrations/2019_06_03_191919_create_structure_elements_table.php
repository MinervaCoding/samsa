<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStructureElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structure_elements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_number');
            $table->text('description');
            $table->text('comment');
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->bigInteger('country_of_execution_id')->unsigned();
            $table->bigInteger('structure_element_type_id')->unsigned();
            $table->bigInteger('accounting_information_id')->unsigned();
            $table->timestamps();


            $table->foreign('parent_id')->references('id')->on('structure_elements');
            $table->foreign('country_of_execution_id')->references('id')->on('countries');
            $table->foreign('structure_element_type_id')->references('id')->on('structure_element_types');
            $table->foreign('accounting_information_id')->references('id')->on('accounting_information');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('structure_elements');
    }
}
