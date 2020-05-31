<?php

namespace DevHealth;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function posts()
    {
    	return $this->hasMany('DevHealth\Post');
    }
    public function getRouteKeyName()
	{
    	return 'category';
	}
}
