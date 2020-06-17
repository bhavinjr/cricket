<?php

namespace App\Forms\Admin;

use Kris\LaravelFormBuilder\Form;
use App\Models\Match;
use App\Models\Team;
use App\Models\Venue;

class MatchForm extends Form
{
    public function buildForm()
    {
        $teamChoices    = Team::pluck('name', 'id')->toArray();
        $venueChoices   = Venue::pluck('name', 'id')->toArray();
        $this->add('match_type', 'choice', [
            'choices' => Match::MATCH_TYPE_FLAGS,
            'rules' => Match::getRules()['match_type'],
        ])
        ->add('team_1', 'choice', [
            'label'     => 'Team 1(Host)',
            'choices'   => [''=> '--Select--'] + $teamChoices,
            'attr' 		=> ['class' => 'form-control select2'],
            'rules'     => Match::getRules()['team_1'],
        ])
        ->add('team_2', 'choice', [
            'label'     => 'Team 2(Visitor)',
            'choices'   => [''=> '--Select--'] + $teamChoices,
            'attr' 		=> ['class' => 'form-control select2'],
            'rules'     => Match::getRules()['team_2'],
        ])
        ->add('match_date', 'text', [
            'rules' => Match::getRules()['match_date'],
        ])
        ->add('match_time', 'text', [
            'rules' => Match::getRules()['match_time'],
        ])
        ->add('venue_id', 'choice', [
            'label'     => 'Venue',
            'choices'   => [''=> '--Select--'] + $venueChoices,
            'attr' 		=> ['class' => 'form-control select2'],
            'rules'     => Match::getRules()['venue_id'],
        ])
        ->add('toss_winner', 'choice', [
            'choices'   => [''=> '--Select--'],
            'rules'     => Match::getRules()['toss_winner'],
        ])
        ->add('match_winner', 'choice', [
            'choices'   => ['null'=> 'No Team'],
            'rules'     => Match::getRules()['match_winner'] ?? '',
        ])
        ->add('win_type', 'choice', [
            'choices'   => ['null'=> 'No Team'],
            'rules'     => Match::getRules()['win_type'],
        ])
        ->add('marging', 'number', [
            'rules'     => Match::getRules()['marging'],
        ])
        ->add('man_of_the_match', 'choice', [
            'choices'   => ['null'=> 'No Team'],
            'rules'     => Match::getRules()['man_of_the_match'],
        ]);
    }
}
