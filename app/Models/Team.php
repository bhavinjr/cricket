<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Team extends Model
{
    protected $fillable = [
        'name', 'logo_url',
    ];

    public static function getRules($rule = 'create', $key = null)
    {
        $return = [
            'name' 		=>  'required|alpha|min:3|max:100|'.Rule::unique('teams')->ignore($key)
        ];
        switch ($rule) {
            case 'create':
                $return += [
                    'logo_url' 	=>  'required|file|max:6000|mimes:jpg,jpeg,png',
                ];
                break;
            case 'edit':
                $return += [
                    'logo_url' 	=>  'file|max:6000|mimes:jpg,jpeg,png',
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
            'logo_url.max' 	=> 'The :attribute may not be greater than 6 MB'
        ];
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
