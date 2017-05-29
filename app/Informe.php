<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    protected $table = 'informes';
    protected $fillable = ['name','periodo'];
    protected $guarded = ['id'];


    public function areas(){
        return $this->hasMany('Sanleo\Area');
    }
}
