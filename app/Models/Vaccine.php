<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'number', 'name', 'series', 'expiry',
        'balance1', 'used1', 'adults1', 'children1',
        'balance2', 'used2', 'adults2', 'children2',
        'balance3', 'used3', 'adults3', 'children3',
        'balance4', 'used4', 'adults4', 'children4',
        'balance5', 'used5', 'adults5', 'children5',
    ];
}
