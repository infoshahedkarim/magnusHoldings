<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'logo',
        'logodark',
        'about',
        'address',
        'phone',
        'email',
        'facebook',
        'twitter',
        'linkedin',
        'youtube',
    ];
}
