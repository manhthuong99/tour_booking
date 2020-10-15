<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'category_id';
    public $timestamps = false;
    public function tours()
    {
        return $this->hasMany('App\Models\Tours','tours_id');
    }
    public function category_detail()
    {
        return $this->hasMany('App\Models\Category_detail','category_detail_id');
    }
}
