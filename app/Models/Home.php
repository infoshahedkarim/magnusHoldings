<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'image',
        'title',
        'image1',
        'title1',
        'image2',
        'title2',
        'number',
        'url',
    ];
}
