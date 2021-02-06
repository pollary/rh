<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('matricula')->nullable();
            $table->float("vencimentos");
            $table->string("nome");
            $table->string("cpf",11);
            $table->string("pis",11);
            $table->unsignedBigInteger('secretaria')->unsigned();
            $table->unsignedBigInteger('vinculo')->unsigned();
            $table->unsignedBigInteger('cargo')->unsigned();
                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
