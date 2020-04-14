<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];


    public static function transformed() {
    	return collect(array_combine(array_column(static::all()->toArray(), 'name'), static::all()->toArray()));
    }
}
