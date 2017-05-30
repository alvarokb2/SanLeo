<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;
use Sanleo\User;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = ['id_educadora','name'];
    protected $guarded = ['id'];
    
}
