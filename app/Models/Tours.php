<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    protected $table = 'tours';
    protected $primaryKey = 'tours_id';
    public $timestamps = false;
    public function destination()
    {
        return $this->belongsTo('App\Model\Destination','id_destination');
    }
    public function booking()
    {
        return $this->hasMany('App\Model\Booking','id_tours');
    }
}
