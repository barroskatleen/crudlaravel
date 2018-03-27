<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('id_aluno',10);
            $table->char('name',100);
            $table->date('data_nascimento');
            $table->char('logradouro',255);
            $table->char('numero',10);
            $table->char('bairro',20);
            $table->char('cidade',20);
            $table->char('estado',20);
            $table->char('cep',9);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
