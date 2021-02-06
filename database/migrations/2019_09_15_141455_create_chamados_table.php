<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->integer('departamento');
            $table->integer('assunto');
            $table->integer('assunto_detalhe');
            $table->text('ocorrencia');
            $table->string('telefone');
            $table->string('solicitante');
            $table->integer('status');
            $table->integer('resolvido');
            $table->integer('prioridade');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamados');
    }
}
