<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'email',
        'card',
        'departure',
        'destination',
        'time_slot',
        'class',
        'price',
    ];
}
