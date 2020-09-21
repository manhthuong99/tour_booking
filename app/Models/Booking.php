<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'booking_id';
    protected $guarded = [];
    public function tours()
    {
        return $this->belongsTo('App\Model\Tours','id_tours');
    }
}
