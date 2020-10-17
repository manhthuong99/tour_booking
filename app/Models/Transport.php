<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $table = 'transport';
    public $timestamps = false;
    public function tours()
    {
        return $this->hasMany('App\Models\Tours','tours_id');
    }
    public function transport_detail()
    {
        return $this->hasMany('App\Models\Transport_detail','transport_detail_id');
    }
}
