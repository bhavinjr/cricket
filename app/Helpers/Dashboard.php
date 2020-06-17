<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Cache;
use App\Models\PlayerBattingHistory;
use App\Models\PlayerBowlingHistory;
use App\Models\Team;
use App\Models\Player;
use App\Models\Match;

class Dashboard
{
    const CACHE_DURATION    =   1800; //SECONDS
    const CACHE_USER_KEY    =   'dashboard_data';

    private function set($key = 'lifetime_teams', $count = 0)
    {
        $this->{$key}   =   $count;
    }

    public function getTeamBaseQuery()
    {
        return Team::query();
    }

    public function getPlayerBaseQuery()
    {
        return Player::query();
    }

    public function getMatchesBaseQuery()
    {
        return Match::query();
    }

    public function getPlayerBattingBaseQuery()
    {
        return PlayerBattingHistory::query();
    }

    public function getPlayerBowlingBaseQuery()
    {
        return PlayerBowlingHistory::query();
    }

    private function calculateCount($query)
    {
        return $query
                    ->count();
    }

    private function determineTeams()
    {
        $query      =   $this
                            ->getTeamBaseQuery();
        // filter in where conditon if any

        $this->set('lifetime_teams', $this->calculateCount($query));
    }

    private function determinePlayers()
    {
        $query      =   $this
                            ->getPlayerBaseQuery();
        // filter in where conditon if any

        $this->set('lifetime_players', $this->calculateCount($query));
    }

    private function determineMatches()
    {
        $query      =   $this
                            ->getMatchesBaseQuery();

        $this->set('lifetime_matches', $this->calculateCount($query));
    }

    private function determineMostRuns()
    {
        $test      =   $this
                        ->getPlayerBattingBaseQuery()
                        ->with('player')
                        ->byTest();

        $odi      =   $this
                        ->getPlayerBattingBaseQuery()
                        ->with('player')
                        ->byOdi();

        $t20      =   $this
                        ->getPlayerBattingBaseQuery()
                        ->with('player')
                        ->byT20();

        $runs = [
            'test' => $test->orderByDesc('runs')->take(5)->get(),
            'odi' => $odi->orderByDesc('runs')->take(5)->get(),
            't20' => $t20->orderByDesc('runs')->take(5)->get(),
        ];

        $this->set('lifetime_runs', $runs);
    }

    private function determineMostWickets()
    {
        $test      =   $this
                        ->getPlayerBowlingBaseQuery()
                        ->with('player')
                        ->byTest();

        $odi      =   $this
                        ->getPlayerBowlingBaseQuery()
                        ->with('player')
                        ->byOdi();

        $t20      =   $this
                        ->getPlayerBowlingBaseQuery()
                        ->with('player')
                        ->byT20();

        $wickets = [
            'test' => $test->orderByDesc('wickets')->take(5)->get(),
            'odi' => $odi->orderByDesc('wickets')->take(5)->get(),
            't20' => $t20->orderByDesc('wickets')->take(5)->get(),
        ];

        $this->set('lifetime_wickets', $wickets);
    }

    private function calculateTeams()
    {
        //LifeTime
        $this->determineTeams();

        return $this;
    }

    private function calculatePlayers()
    {
        //LifeTime
        $this->determinePlayers();

        return $this;
    }

    private function calculateMatches()
    {
        //LifeTime
        $this->determineMatches();

        return $this;
    }

    private function calculateMostRuns()
    {
        //LifeTime
        $this->determineMostRuns();

        return $this;
    }

    private function calculateMostWickets()
    {
        //LifeTime
        $this->determineMostWickets();

        return $this;
    }

    private function calculate()
    {
        $this->calculateTeams();

        $this->calculatePlayers();

        $this->calculateMatches();

        $this->calculateMostRuns();

        $this->calculateMostWickets();

        return $this;
    }

    public function get()
    {
        //TODO: add caching here
        return $this
                ->calculate();
    }
}
