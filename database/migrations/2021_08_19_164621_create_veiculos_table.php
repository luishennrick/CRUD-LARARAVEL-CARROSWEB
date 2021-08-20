<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->string('placa', 7);
            $table->integer('renavam')->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->integer('ano', 4);
            $table->string('proprietario')->references('name')->on('users');
            $table->string('email_proprietario')->references('email')->on('users');
            $table->timestamps();
            $table->softDeletes($column = 'Carro_delete', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
