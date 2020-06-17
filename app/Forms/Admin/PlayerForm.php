<?php

namespace App\Forms\Admin;

use Kris\LaravelFormBuilder\Form;
use App\Models\Country;
use App\Models\Player;
use App\Models\Team;

class PlayerForm extends Form
{
    public function buildForm()
    {
        $teamChoices    = Team::pluck('name', 'id')->toArray();
        $countryChoices = Country::pluck('name', 'id')->toArray();

        $this->add('team_id', 'choice', [
            'label'     => 'Team',
            'choices'   => [''=> '--Select--'] + $teamChoices,
            'rules'     => Player::getRules()['team_id'],
        ])
        ->add('first_name', 'text', [
            'rules' => Player::getRules()['first_name'],
        ])
        ->add('last_name', 'text', [
            'rules' => Player::getRules()['last_name'],
        ])
        ->add('avatar_url', 'file', [
            'label' => 'Avatar',
        ])
        ->add('jersey_number', 'number', [
            'rules' => Player::getRules()['jersey_number'],
        ])
        ->add('country_id', 'choice', [
            'label'     => 'Country',
            'choices'=> [''=> '--Select--'] + $countryChoices,
            'attr' => ['class' => 'form-control select2'],
            'rules' => Player::getRules()['country_id'],
        ]);
    }
}
