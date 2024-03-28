<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'User';
    protected $fillable = [
        'name', 'last_name', 'dni', 'email', 'institution_id', 'type'
    ];

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
