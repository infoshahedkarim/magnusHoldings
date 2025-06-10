<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    protected $fillable = [
        'phone1',
        'phone2',
        'email1',
        'email2',
        'address',
        'map',
    ];
}
