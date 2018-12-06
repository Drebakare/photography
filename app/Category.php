<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category', 'image', 'description',
    ];

    public  function picture()
    {
        return $this->hasMany(Picture::class);
    }
}
