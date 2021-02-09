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
            $table->string("nome");
            $table->string("cpf",14);
            $table->string("pis",14)->nullable();
            $table->string("vencimentos")->nullable();
            $table->string("telefone")->nullable();
            $table->unsignedBigInteger('secretaria')->unsigned();
            $table->unsignedBigInteger('vinculo')->unsigned();
            $table->unsignedBigInteger('cargo')->unsigned();
            $table->date("admissao")->nullable();
            $table->unsignedBigInteger('qualificacao')->unsigned();
            $table->text("observacao")->nullable();       
        });

        Schema::table('funcionarios', function (Blueprint $table)
        {
            $table->foreign('vinculo')->references('id')->on('vinculos');
            $table->foreign('secretaria')->references('id')->on('secretarias');
            $table->foreign('cargo')->references('id')->on('cargos');
            $table->foreign('qualificacao')->references('id')->on('qualificacaos');

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
