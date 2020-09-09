<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->integer('receptionfee_id')->unsigned();
            $table->integer('diagnosis_id')->unsigned();
            $table->integer('drug_id')->unsigned();
            $table->string('total');
            $table->timestamps();

            $table->foreign('patient_id')
            ->references('id')->on('patients')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('receptionfee_id')
            ->references('id')->on('reception_fees')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('diagnosis_id')
            ->references('id')->on('diagnoses')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('drug_id')
            ->references('id')->on('drugs')
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
        Schema::dropIfExists('invoices');
    }
}
