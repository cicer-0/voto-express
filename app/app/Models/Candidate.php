<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'Candidate';
    protected $fillable = [
        'name', 'last_name', 'political_party', 'option_id', 'photo_url', 'date_of_birth', 'experience'
    ];

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
