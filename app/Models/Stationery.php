<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stationery extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'admin_a1',
'admin_o1',
'nurse_a1',
'nurse_o1',
'admin_a2',
'admin_o2',
'nurse_a2',
'nurse_o2',
'admin_a3',
'admin_o3',
'nurse_a3',
'nurse_o3',
'admin_a4',
'admin_o4',
'nurse_a4',
'nurse_o4',
'admin_a5',
'admin_o5',
'nurse_a5',
'nurse_o5',
'admin_a6',
'admin_o6',
'admin_a7',
'admin_o7',
'admin_a8',
'admin_o8',
'admin_a9',
'admin_o9',
'date',
    ];

    protected $hidden = [
        'id', 'updated_at', 'created_at',
    ];
}
