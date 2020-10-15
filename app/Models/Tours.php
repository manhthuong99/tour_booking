<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    protected $table = 'tours';
    protected $primaryKey = 'tours_id';
    public $timestamps = false;
    public function booking()
    {
        return $this->hasMany('App\Models\Booking','id_tours');
    }
//    public function category()
//    {
//        return $this->hasMany('App\Models\Category','id_tours');
//    }
//    public function categoryDetail()
//    {
//        return $this->hasMany('App\Models\Category_detail','id_tours');
//    }
}
