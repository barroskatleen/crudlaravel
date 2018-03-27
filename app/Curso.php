<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['id_curso','name'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'cursos';
}
