<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\Rule;

class PlayerBowlingHistory extends Model
{
    protected $fillable = [
        'player_id', 'match_type', 'matches', 'innings', 'wickets', 'five_wickets', 'ten_wickets'
    ];

    public static function getRules($rule = 'create', $key = null)
    {
        $return = [
            'match_type' 	=> 'required|'.Rule::in(array_keys(Match::MATCH_TYPE_FLAGS)),
            'bowling_matches' 	=>  'required|min:1',
            'bowling_innings' 	=>  'required|min:1|lte:bowling_matches',
            'wickets' 	     =>  'required|min:0',
            'five_wickets' 	 =>  'required|lte:bowling_innings|min:0',
            'ten_wickets' 	 =>  'required|lte:bowling_innings|min:0'
        ];

        switch ($rule) {
            case 'create':
                break;
            default:
                break;
        }

        return $return;
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function scopeByTest($query) : Builder
    {
        return $query->where('match_type', Match::MATCH_TYPE_TEST);
    }

    public function scopeByOdi($query) : Builder
    {
        return $query->where('match_type', Match::MATCH_TYPE_ODI);
    }

    public function scopeByT20($query) : Builder
    {
        return $query->where('match_type', Match::MATCH_TYPE_T20);
    }

    public function getMatchType()
    {
        return Match::MATCH_TYPE_FLAGS[$this->match_type];
    }
}
