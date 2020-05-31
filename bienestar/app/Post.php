<?php

namespace DevHealth;

use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
    public function user()
    {
    	return $this->belongsTo('DevHealth\User');
    }
    public function comments()
    {
    	return $this->hasMany('DevHealth\Comment');
    }
    public function categorie()
    {
    	return $this->belongsTo('DevHealth\Categorie');
    }
}
