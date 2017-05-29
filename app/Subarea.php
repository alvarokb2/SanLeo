<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Subarea extends Model
{
    protected $table = 'subareas';
    protected $fillable = ['name','id_area', 'obervacion'];
    protected $guarded = ['id'];


    public function area(){
        return $this->belongsTo('Sanleo\Area');
    }
    public function items(){
        return $this->hasMany('Sanleo\Item');
    }
}
