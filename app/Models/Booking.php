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
        return $this->belongsTo('App\Models\Tours','id_tours');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\Users','id_users');
    }
}
