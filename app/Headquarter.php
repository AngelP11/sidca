<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    public $timestamps = false;

    protected $fillable = [
    	'headquarter', 
    ];

    public function teachers()
    {
    	return $this->hasMany(Teacher::class);
    }

    public function nucleus()
    {
    	return $this->hasMany(Nucleus::class);
    }
}
