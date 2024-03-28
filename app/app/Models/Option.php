<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'Option';

    protected $fillable = [
        'name', 'description', 'election_id', 'vote_count'
    ];

    public function election()
    {
        return $this->belongsTo(Election::class);
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }
}
