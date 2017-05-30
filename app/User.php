<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PhpParser\ErrorHandler\Collecting;
use Sanleo\Curso;

class User extends Authenticatable
{
    use Notifiable;

    public function cursos(){
        $cursousers = CursoUser::where('id_user', $this->id)->get();
        $cursos = null;
        foreach($cursousers as $cursouser) {
            $curso = (Curso::where('id', $cursouser->id_curso)->get());
            if($cursos == null){
                $cursos = $curso;
            }
            else{
                $cursos->push($curso[0]);
            }
        }
        return $cursos;
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
        'name', 'email', 'password',
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
