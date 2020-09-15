<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destination';
    protected $primaryKey = 'destination_id';
    public $timestamps = false;
    public function Tours()
    {
        return $this->hasMany('App\Model\Tours');
    }
}
