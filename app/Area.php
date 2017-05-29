<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
    protected $fillable = ['id_informe','name'];
    protected $guarded = ['id'];


    public function informe()
    {
        return $this->belongsTo('Sanleo\Informe');
    }


}
