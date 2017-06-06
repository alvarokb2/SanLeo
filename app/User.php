<?php

namespace Sanleo;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Sanleo\Curso;

class User extends Authenticatable
{
    use Notifiable;

    public function cursos()
    {
        return $this->belongsToMany('Sanleo\Curso', 'curso_users', 'id_user', 'id_curso');
    }

    public function alumnos(){
        return $this->hasMany('Sanleo\Alumno');

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'rol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
