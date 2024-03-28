<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $table = 'Institution';

    protected $fillable = [
        'name', 'address', 'city', 'country'
    ];
}
