<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('amount', 20, 2)->unsigned();
            $table->date('date');
            $table->string('bank');
            $table->string('brn');
            $table->text('comment')->nullable();
            $table->timestamps();
            $table->smallInteger('status')->nullable()->default(0); // 0: Por Confirmar, 1: Confirmado, 2: Rechazado
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('bank_id')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}