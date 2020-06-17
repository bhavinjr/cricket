<?php

namespace App\Forms\Admin;

use Kris\LaravelFormBuilder\Form;
use App\Models\PlayerBowlingHistory;
use App\Models\Match;

class BowlingForm extends Form
{
    public function buildForm()
    {
        $this->add('match_type', 'choice', [
            'choices' => Match::MATCH_TYPE_FLAGS,
            'rules' => Match::getRules()['match_type'],
        ])
        ->add('bowling_matches', 'number', [
            'label' => 'Matches',
            'rules' => PlayerBowlingHistory::getRules()['bowling_matches'],
        ])
        ->add('bowling_innings', 'number', [
            'label' => 'Innings',
            'rules' => PlayerBowlingHistory::getRules()['bowling_innings'],
        ])
        ->add('wickets', 'number', [
            'rules' => PlayerBowlingHistory::getRules()['wickets'],
        ])
        ->add('five_wickets', 'number', [
            'rules' => PlayerBowlingHistory::getRules()['five_wickets'],
        ])
        ->add('ten_wickets', 'number', [
            'rules' => PlayerBowlingHistory::getRules()['ten_wickets'],
        ]);
    }
}
