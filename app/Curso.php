<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;
use Sanleo\User;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = ['id_educadora','name'];
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany('Sanleo\User', 'curso_users', 'id_curso','id_user');

    }
    
}
