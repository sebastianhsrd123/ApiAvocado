<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [

        'user',
        'dir',
        'email',
        'Pago',
        'Total'
    ];

    protected $hidden = [

        'updated_at',
        'created_at'
    ];
}
