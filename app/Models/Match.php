<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class Match extends Model
{
    protected $fillable = [
        'match_type', 'team_1', 'team_2', 'match_date', 'match_time', 'venue_id', 'toss_winner', 'win_type', 'match_winner', 'margin', 'man_of_the_match'
    ];

    const MATCH_TYPE_TEST = 1;
    const MATCH_TYPE_ODI = 2;
    const MATCH_TYPE_T20 = 3;

    const MATCH_TYPE_FLAGS = [
        self::MATCH_TYPE_TEST	=> 'Test',
        self::MATCH_TYPE_ODI 	=> 'ODI',
        self::MATCH_TYPE_T20 	=> 'T20',
    ];

    const WIN_BY_RUN 	= 1;
    const WIN_BY_WICKET = 2;
    const DRAW 			= 3;
    const NO_RESULT 	= 4;

    const WIN_TYPE_FLAGS = [
        self::WIN_BY_RUN 	=> 'By Run',
        self::WIN_BY_WICKET => 'By Wicket',
        self::DRAW => 'Draw',
        self::NO_RESULT => 'No Result',
    ];

    const WINNER_POINTS     = 2;
    const NO_RESULT_POINTS  = 1;

    public static function getRules($rule = 'create', $key = null)
    {
        $return = [
            'match_type' 	=> 'required|'.Rule::in(array_keys(self::MATCH_TYPE_FLAGS)),
            'team_1' 	=>  'required|exists:teams,id',
            'team_2' 	=>  'required|exists:teams,id',
            'match_date' =>  'required',
            'match_time' =>  'required',
            'venue_id' 		=>  'required|exists:venues,id',
            'toss_winner' 	=>  'nullable|exists:teams,id',
            'win_type'  =>  'required',
            'match_winner' 	=>  'required_if:win_type,1,2',
            'margin' 	=>  'required_if:win_type,1,2',
            'man_of_the_match' 	=>  'nullable|exists:players,id',
        ];

        switch ($rule) {
            case 'create':
                break;
            default:
                break;
        }

        return $return;
    }

    public function hostTeam()
    {
        return $this->belongsTo(Team::class, 'team_1');
    }

    public function visitorTeam()
    {
        return $this->belongsTo(Team::class, 'team_2');
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function winner()
    {
        return $this->belongsTo(Team::class, 'match_winner');
    }

    public function point()
    {
        return $this->hasOne(PointTable::class);
    }

    public function manOfTheMatch()
    {
        return $this->belongsTo(Player::class, 'man_of_the_match');
    }

    public function scopeByDate($query, $date) : Builder
    {
        return $query->where('match_date', $date);
    }

    public function scopeByTest($query) : Builder
    {
        return $query->where('match_type', self::MATCH_TYPE_TEST);
    }

    public function scopeByOdi($query) : Builder
    {
        return $query->where('match_type', self::MATCH_TYPE_ODI);
    }

    public function scopeByT20($query) : Builder
    {
        return $query->where('match_type', self::MATCH_TYPE_T20);
    }

    public function scopeByTeams($query, $teams) : Builder
    {
        return $query->whereIn('team_1', $teams)
                    ->orWhereIn('team_2', $teams);
    }

    public function getWinType()
    {
        return self::WIN_TYPE_FLAGS[$this->win_type];
    }

    public function hasResult() : bool
    {
        return $this->win_type == self::WIN_BY_RUN ||
                $this->win_type == self::WIN_BY_WICKET;
    }

    public function matchPoint() : int
    {
        if($this->hasResult()) {
            return self::WINNER_POINTS;
        }
        return self::NO_RESULT_POINTS;
    }

    public function getMatchTimeAttribute($value)
    {
        try {
            return Carbon::parse($value)->format('H:i');
        } catch (\Exception $ex) {
            \Log::debug('Match@getMatchTimeAttribute '.$ex->getMessage(). ' Line:-'.$ex->getLine());
        }
        return $value;
    }
}
