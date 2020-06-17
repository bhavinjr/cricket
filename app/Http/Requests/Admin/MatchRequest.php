<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Traits\FormatClientErrors;
use App\Models\Match;

class MatchRequest extends FormRequest
{
    use FormatClientErrors;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Match::getRules();
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->isMatchOnSameDay()) {
                $validator
                    ->errors()
                    ->add('match', trans('admin.match.exists'));
            }
        });
    }

    public function isUpdate() : bool
    {
        return $this->route()->getName() == 'admin.api_matches.update';
    }

    public function isMatchOnSameDay() : bool
    {
        $date = $this->get('match_date');
        $teams = [$this->get('team_1'), $this->get('team_2')];

        if ($this->isUpdate()) {
            return Match::where('id', '<>', $this->match->id)
                    ->byDate($date)
                    ->byTeams($teams)
                    ->exists();
        }
        return Match::byDate($date)
                    ->byTeams($teams)
                    ->exists();
    }
}
