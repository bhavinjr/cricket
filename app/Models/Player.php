<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'team_id', 'first_name', 'last_name', 'avatar_url', 'jersey_number', 'country_id'
    ];

    public static function getRules($rule = 'create', $key = null)
    {
        $return = [
            'team_id' 		=>  'required|exists:teams,id',
            'first_name' 	=>  'required|alpha|min:2|max:100',
            'last_name' 	=>  'nullable|alpha|min:3|max:100',
            'jersey_number' =>  'required|min:0|unique:players,team_id,NULL,id,jersey_number,'.$key,
            'country_id' 	=>  'required|exists:countries,id',
        ];
        switch ($rule) {
            case 'create':
                $return += [
                    'avatar_url' 	=>  'required|file|max:6000|mimes:jpg,jpeg,png',
                ];
                break;
            case 'edit':
                $return += [
                    'avatar_url' 	=>  'file|max:6000|mimes:jpg,jpeg,png',
                ];
                break;
            default:
                break;
        }
        return $return;
    }

    public static function getRuleMessages() : array
    {
        return [
            'avatar_url.max' 	=> 'The :attribute may not be greater than 6 MB'
        ];
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function battings()
    {
        return $this->hasMany(PlayerBattingHistory::class);
    }

    public function bowlings()
    {
        return $this->hasMany(PlayerBowlingHistory::class);
    }

    public function getFullNameAttribute() : string
    {
        return "$this->first_name $this->last_name";
    }
}
