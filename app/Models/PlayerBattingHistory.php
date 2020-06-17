<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\Rule;

class PlayerBattingHistory extends Model
{
    protected $fillable = [
        'player_id', 'match_type', 'matches', 'innings', 'runs', 'highest', 'not_outs', 'fifties', 'hundreds', 'fours', 'sixes'
    ];

    public static function getRules($rule = 'create', $key = null)
    {
        $return = [
            'match_type' 	=> 'required|'.Rule::in(array_keys(Match::MATCH_TYPE_FLAGS)),
            'matches' 	=>  'required|min:1',
            'innings' 	=>  'required|min:1|lte:matches',
            'runs' 		=>  'required|min:0',
            'highest' 	=>  'required|min:0|lte:runs',
            'not_outs' 	=>  'required|lte:innings|min:0',
            'fifties' 	=>  'nullable|lte:innings|min:0',
            'hundreds'  =>  'required|lte:innings|min:0',
            'fours' 	=>  'required|min:0',
            'sixes' 	=>  'required|min:0'
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
