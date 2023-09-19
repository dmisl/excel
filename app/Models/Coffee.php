<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    protected $fillable = [
        'goods', 'street1', 'street2', 'street3', 'street4', 'street5', 'street6', 'date',
    ];

    protected $hidden = [
        'id', 'updated_at', 'created_at',
    ];
}
