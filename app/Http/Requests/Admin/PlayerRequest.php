<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Player;

class PlayerRequest extends FormRequest
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
        $rules = Player::getRules('create');

        if ($this->isUpdate()) {
            $rules = Player::getRules('edit', $this->player->id);
        }

        return $rules;
    }

    public function isUpdate() : bool
    {
        return $this->route()->getName() == 'admin.players.update';
    }

    public function messages() : array
    {
        return Player::getRuleMessages();
    }
}
