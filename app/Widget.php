<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    protected $fillable = ['name'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
