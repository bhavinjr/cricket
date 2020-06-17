<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Requests\Admin\MatchRequest;
use Illuminate\Support\Facades\DB;
use App\Traits\RestfulResponseTrait;
use App\Helpers\Helper;
use App\Models\Match;

class MatchController extends Controller
{
    use RestfulResponseTrait;

    protected $view_path = 'admin.partials.matches.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Match::with('hostTeam', 'visitorTeam', 'venue', 'winner', 'manOfTheMatch')->get();
        return view($this->view_path.'index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view_path.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\MatchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MatchRequest $request)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();

            $match = Match::create($data);
            $match->point()
                ->create(['point' => $match->matchPoint()]);
            DB::commit();
            $request->session()->flash('message', trans('admin.match.store'));
            return $this->createdResponse([], trans('admin.match.store'));
        } catch (\Exception $ex) {
            DB::rollBack();
            \Log::error('MatchController@store '.$ex->getMessage(). ' Line:-'.$ex->getLine());
            return $this->clientError($ex->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        return view($this->view_path.'edit', compact('match'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\MatchRequest  $request
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(MatchRequest $request, Match $match)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();

            $match->update($data);

            if($match->wasChanged('match_winner')) {
                $match->point()
                    ->update(['point' => $match->matchPoint()]);    
            }
            DB::commit();
            $request->session()->flash('message', trans('admin.match.update'));
            return $this->createdResponse([], trans('admin.match.update'));
        } catch (\Exception $ex) {
            DB::rollBack();
            \Log::error('MatchController@update '.$ex->getMessage(). ' Line:-'.$ex->getLine());
            return $this->clientError($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        try {
            $match->delete();
            return redirect()->route('admin.matches.index')
                        ->with('message', trans('admin.match.delete'));
        } catch (\Exception $ex) {
            return back()->withErrors($ex->getMessage());
        }
    }
}
