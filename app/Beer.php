<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = [
        'name', 'appearance', 'taste', 'style', 'gluten_free', 'nation','cL', 'alcohol', 'price', 'img_url'
    ];
}
