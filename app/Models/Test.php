<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        '1', '2', '3',
    ];

    protected $hidden = [
        'created_at', 'updated_at', 'id',
    ];
}
