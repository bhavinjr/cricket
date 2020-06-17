<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\RestfulResponseTrait;
use App\Models\Team;
use App\Models\Venue;
use App\Helpers\Dashboard;

class AdminController extends Controller
{
    use RestfulResponseTrait;

    protected $view_path = 'admin.';

    public function dashboard()
    {
        $dashboard      = (new Dashboard())
                            ->get();

        return view($this->view_path.'dashboard', compact('dashboard'));
    }

    public function getTeams()
    {
        $teams = Team::pluck('name', 'id')->toArray();

        return $this->listResponse($teams);
    }

    public function getVenues()
    {
        $venues = Venue::pluck('name', 'id')->toArray();

        return $this->listResponse($venues);
    }
}
