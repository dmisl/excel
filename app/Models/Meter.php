<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meter extends Model
{
    use HasFactory;

    protected $fillable = [
        'data', 'month1', 'month2', 'month3', 'month4', 'month5', 'month6', 'date',
    ];

    protected $hidden = [
        'id'
    ];
}
