<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_solutions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('duty_id')->unsigned();
            $table->text('doctor_solutions');
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('duty_id')
            ->references('id')->on('duties')
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
        Schema::dropIfExists('doctor_solutions');
    }
}
