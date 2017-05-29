<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $fillable = ['id_curso','id_apoderado','name','edad','fecha_nacimiento'];
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

