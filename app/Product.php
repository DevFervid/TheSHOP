<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','category_id','supplier_id','price','image'];

    public function shops(){

    	return $this->belongsTo('App\Shop');

    }

    public function categories(){

    	return $this->belongsTo('App\Category');

    }

    public function suppliers(){

    	return $this->hasMany('App\Supplier');

    }
}
