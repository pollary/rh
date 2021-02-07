<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

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
            $table->string('matricula')->nullable(); //nullable deixa o campo ser vazio.
            $table->string("vencimentos")->nullable();
            $table->string("nome");
            $table->string("cpf",14);
            $table->string("pis",14)->nullable();
            $table->string("telefone")->nullable();
            $table->text("observacao")->nullable();
            $table->unsignedBigInteger('secretaria')->unsigned();
            $table->unsignedBigInteger('vinculo')->unsigned();
            $table->unsignedBigInteger('cargo')->unsigned();
                   
        });

        Schema::table('funcionarios', function (Blueprint $table)
        {
            $table->foreign('vinculo')->references('id')->on('vinculos');
            $table->foreign('secretaria')->references('id')->on('secretarias');
            $table->foreign('cargo')->references('id')->on('cargos');

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
