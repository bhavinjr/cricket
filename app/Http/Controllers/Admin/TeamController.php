<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Requests\Admin\TeamRequest;
use Illuminate\Support\Facades\DB;
use App\Helpers\Helper;
use App\Models\Team;

class TeamController extends Controller
{
    protected $view_path = 'admin.partials.teams.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Team::get();
        return view($this->view_path.'index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Kris\LaravelFormBuilder\FormBuilder  $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('App\Forms\Admin\TeamForm', [
            'method'  => 'POST',
            'url'     => route('admin.teams.store')
        ])
        ->modify('logo_url', 'file', [
            'rules' => Team::getRules()['logo_url'],
        ])
        ->add('submit', 'submit', [
            'attr' => ['class' => 'btn btn-success col-xs-12']
        ]);
        return view($this->view_path.'form', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\TeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();

            $team = Team::create($data);
            $url        =   Helper::imageUpload($request, 'logo_url');
            if ($url) {
                $team->logo_url =   $url;
            }
            $team->save();
            DB::commit();
            return redirect()->route('admin.teams.index')
                            ->with('message', trans('admin.team.store'));
        } catch (\Exception $ex) {
            DB::rollBack();
            \Log::error('TeamController@store '.$ex->getMessage(). ' Line:-'.$ex->getLine());
            return back()->withErrors($ex->getMessage())
                        ->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @param  \Kris\LaravelFormBuilder\FormBuilder  $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team, FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('App\Forms\Admin\TeamForm', [
            'method'  => 'PUT',
            'model'   => $team,
            'url'     => route('admin.teams.update', $team->id)
        ])
        ->modify('logo_url', 'file', [
            'rules' => Team::getRules('edit')['logo_url'],
        ])
        ->add('Update', 'submit', [
            'attr' => ['class' => 'btn btn-success col-xs-12']
        ]);
        $team->load('players.country');
        return view($this->view_path.'form', compact('form', 'team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\TeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, Team $team)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $team->update($data);
            $url        =   Helper::imageUpload($request, 'logo_url');
            if ($url) {
                $team->logo_url =   $url;
            }
            $team->save();
            DB::commit();
            return redirect()->route('admin.teams.index')
                            ->with('message', trans('admin.team.update'));
        } catch (\Exception $ex) {
            DB::rollBack();
            \Log::error('TeamController@update '.$ex->getMessage(). ' Line:-'.$ex->getLine());
            return back()->withErrors($ex->getMessage())
                        ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        try {
            $team->delete();
            return redirect()->route('admin.teams.index')
                        ->with('message', trans('admin.team.delete'));
        } catch (\Exception $ex) {
            $message = 'Unable to Delete it\'s associated with this Players or matches';
            if ($ex->getCode() == 23000) {
                $message .= ' '.$ex->getMessage();
            }
            return back()->withErrors($message);
        }
    }
}
