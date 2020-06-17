<?php

namespace App\Forms\Admin;

use Kris\LaravelFormBuilder\Form;
use App\Models\PlayerBattingHistory;
use App\Models\Match;

class BattingForm extends Form
{
    public function buildForm()
    {
        $this->add('match_type', 'choice', [
            'choices' => Match::MATCH_TYPE_FLAGS,
            'rules' => Match::getRules()['match_type'],
        ])
        ->add('matches', 'number', [
            'rules' => PlayerBattingHistory::getRules()['matches'],
        ])
        ->add('innings', 'number', [
            'rules' => PlayerBattingHistory::getRules()['innings'],
        ])
        ->add('runs', 'number', [
            'rules' => PlayerBattingHistory::getRules()['runs'],
        ])
        ->add('highest', 'number', [
            'rules' => PlayerBattingHistory::getRules()['highest'],
        ])
        ->add('not_outs', 'number', [
            'rules' => PlayerBattingHistory::getRules()['not_outs'],
        ])
        ->add('fifties', 'number', [
            'rules' => PlayerBattingHistory::getRules()['fifties'],
        ])
        ->add('hundreds', 'number', [
            'rules' => PlayerBattingHistory::getRules()['hundreds'],
        ])
        ->add('fours', 'number', [
            'rules' => PlayerBattingHistory::getRules()['fours'],
        ])
        ->add('sixes', 'number', [
            'sixes' => PlayerBattingHistory::getRules()['sixes'],
        ]);
    }
}
