<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['id_professor','name','data_nascimento'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'professores';
}
