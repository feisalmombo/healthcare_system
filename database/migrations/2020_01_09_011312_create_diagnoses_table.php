<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('mrdt')->nullable();
            $table->string('rbg_fbg')->nullable();
            $table->string('hb')->nullable();
            $table->string('h_pyroli')->nullable();
            $table->string('blood_grouping')->nullable();
            $table->string('stool_routine')->nullable();
            $table->string('hvs')->nullable();
            $table->string('upt')->nullable();
            $table->string('urine_routine')->nullable();
            $table->string('urinalysis')->nullable();
            $table->string('status')->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();

            $table->foreign('patient_id')
            ->references('id')->on('patients')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnoses');
    }
}
