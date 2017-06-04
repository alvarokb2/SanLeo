<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = ['name', 'id_educadora'];
    protected $guarded = ['id'];


    public function educadora(){
        return $this->belongsTo('Sanleo\User');
    }
}
