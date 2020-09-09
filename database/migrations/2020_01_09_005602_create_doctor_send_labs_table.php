<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorSendLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_send_labs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->integer('labtechnician_id')->unsigned();
            $table->text('disease_for_diagnosis');
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('patient_id')
            ->references('id')->on('patients')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('labtechnician_id')
            ->references('id')->on('users')
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
        Schema::dropIfExists('doctor_send_labs');
    }
}
