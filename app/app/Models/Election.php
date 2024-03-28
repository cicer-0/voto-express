<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    protected $table = 'Election';
    protected $fillable = [
        'name', 'start_date', 'end_date', 'institution_id', 'description', 'status'
    ];

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
