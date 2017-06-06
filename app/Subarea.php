<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Subarea extends Model
{
    protected $table = 'subareas';
    protected $fillable = ['name', 'observacion', 'id_area'];
    protected $guarded = ['id'];


    public function area(){
        return $this->belongsTo('Sanleo\Area');
    }
    public function items(){
        return $this->hasMany('Sanleo\Item');
    }
}
