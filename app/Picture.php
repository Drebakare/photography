<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'ImageName', 'ProjectName', 'category_id',
    ];
    public  function category()
    {
        return $this->belongsTo(Category::class);
    }

}

