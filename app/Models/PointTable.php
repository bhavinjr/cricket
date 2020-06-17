<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PointTable extends Model
{
    protected $fillable = [
        'match_id', 'point'
    ];

    public function match()
    {
    	return $this->belongsTo(Match::class);
    }
}
