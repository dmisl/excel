<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testas extends Model
{
    use HasFactory;

    protected $hidden = [
        'id'
    ];

    protected $fillable = [
        'asd', 'zxc', 'abc',
    ];
}
