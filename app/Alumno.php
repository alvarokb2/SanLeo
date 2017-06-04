<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $fillable = ['name','edad','fecha_nacimiento','id_curso','id_apoderado'];
    protected $guarded = ['id'];


    public function curso()
    {
        return $this->belongsTo('Sanleo\Curso');
    }
    public function user()
    {
        return $this->belongsTo('Sanleo\User');
    }

}

