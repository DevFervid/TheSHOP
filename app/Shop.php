<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['name','description','location','supplier_id'];

    public function supplier(){

    	return $this->belongsTo('App\Supplier');

    }

    public function products(){

    	return $this->hasMany('App\Product');

    }
}
