<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'Vote';
    protected $fillable = [
        'user_id', 'option_id', 'vote_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
