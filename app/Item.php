<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $fillable = ['name','id_subarea'];
    protected $guarded = ['id'];


    public function subarea(){
        return $this->belongsTo('Sanleo\Subarea');
    }
}
