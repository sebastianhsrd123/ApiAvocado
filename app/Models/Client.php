<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'lastname',
        'email',
        'direction',
        'password'
    ];

    protected $hidden = [

        'updated_at',
        'created_at'
    ];
}
