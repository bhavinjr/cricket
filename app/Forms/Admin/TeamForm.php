<?php

namespace App\Forms\Admin;

use Kris\LaravelFormBuilder\Form;
use App\Models\Team;

class TeamForm extends Form
{
    public function buildForm()
    {
        $this->add('name', 'text', [
            'rules' => Team::getRules()['name'],
        ])
        ->add('logo_url', 'file', [
            'label' => 'Logo',
        ]);
    }
}
