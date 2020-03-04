<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'responsavel',
        'email',
        'phone',
        'address',
        'obs'
    ];
}
