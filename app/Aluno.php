<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['id_aluno','name','data_nascimento','logradouro','numero','bairro','cidade','estado','cep'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'alunos';
}
