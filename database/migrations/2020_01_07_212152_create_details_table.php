<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('problem_description');
            $table->string('ticket_number')->nullable();
            $table->integer('patient_id')->unsigned();
            $table->integer('specilization_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->string('receptionFee');
            $table->timestamps();

            $table->foreign('patient_id')
            ->references('id')->on('patients')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('specilization_id')
            ->references('id')->on('specilizations')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('department_id')
            ->references('id')->on('departments')
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
        Schema::dropIfExists('details');
    }
}
