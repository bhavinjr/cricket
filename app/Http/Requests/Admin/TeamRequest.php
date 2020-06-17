<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Team;

class TeamRequest extends FormRequest
{
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
        $rules = Team::getRules('create');

        if ($this->isUpdate()) {
            $rules = Team::getRules('edit', $this->team->id);
        }

        return $rules;
    }

    public function isUpdate() : bool
    {
        return $this->route()->getName() == 'admin.teams.update';
    }

    public function messages() : array
    {
        return Team::getRuleMessages();
    }
}
