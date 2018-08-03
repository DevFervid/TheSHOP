<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['name','email','password','phone','idcard','about','location'];

    public function products(){

    	return $this->hasMany('App\Product');

    }
}
