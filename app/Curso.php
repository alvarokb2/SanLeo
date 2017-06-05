<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = ['name', 'id_educadora'];
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany('Sanleo\User', 'curso_users', 'id_curso','id_user');

    }
}
