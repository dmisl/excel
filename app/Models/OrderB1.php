<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderB1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'product', 'm1', 'm2', 's1', 's2', 'l1', 'l2', 'h1', 'h2', 'o1', 'o2', 't1', 't2', 'aa', 'be', 'date',
    ];
}
