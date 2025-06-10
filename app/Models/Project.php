<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable =[
    'title',
    'slug',
    'place',
    'price',
    'address',
    'squareft',
    'image1',
    'image2',
    'floorplan',
    'detail',
    'map',
    ];

}
