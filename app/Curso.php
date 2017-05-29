<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    public function educadora(){
        return $this->belongsTo('Sanleo\User');
    }
}
