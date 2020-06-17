<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Requests\Admin\PlayerRequest;
use App\Http\Requests\Admin\PlayerBattingRequest;
use App\Http\Requests\Admin\PlayerBowlingRequest;
use App\Traits\RestfulResponseTrait;
use Illuminate\Support\Facades\DB;
use App\Helpers\Helper;
use App\Models\Player;

class PlayerController extends Controller
{
    use RestfulResponseTrait;

    protected $view_path = 'admin.partials.players.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Player::with('team', 'country')
                    ->get();
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
        $form = $formBuilder->create('App\Forms\Admin\PlayerForm', [
            'method'  => 'POST',
            'url'     => route('admin.players.store')
        ])
        ->modify('avatar_url', 'file', [
            'rules' => Player::getRules()['avatar_url'],
        ])
        ->add('submit', 'submit', [
            'attr' => ['class' => 'btn btn-success col-xs-12']
        ]);
        return view($this->view_path.'form', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\PlayerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlayerRequest $request)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();

            $team = Player::create($data);
            $url        =   Helper::imageUpload($request, 'avatar_url');
            if ($url) {
                $team->avatar_url =   $url;
            }
            $team->save();
            DB::commit();
            return redirect()->route('admin.players.index')
                            ->with('message', trans('admin.player.store'));
        } catch (\Exception $ex) {
            DB::rollBack();
            \Log::error('PlayerController@store '.$ex->getMessage(). ' Line:-'.$ex->getLine());
            return back()->withErrors($ex->getMessage())
                        ->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @param  \Kris\LaravelFormBuilder\FormBuilder  $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player, FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('App\Forms\Admin\PlayerForm', [
            'method'  => 'PUT',
            'model'   => $player,
            'url'     => route('admin.players.update', $player->id)
        ])->modify('avatar_url', 'file', [
            'rules' => Player::getRules('edit')['avatar_url'],
        ])->add('Update', 'submit', [
            'attr' => ['class' => 'btn btn-success col-xs-12']
        ]);

        $battingForm = $formBuilder->create('App\Forms\Admin\BattingForm', [
            'method'  => 'POST',
            'model'   => $player,
            'url'     => route('admin.player.batting', $player->id)
        ])->add('Submit', 'submit', [
            'attr' => ['class' => 'btn btn-success col-xs-12']
        ]);

        $bowlingForm = $formBuilder->create('App\Forms\Admin\BowlingForm', [
            'method'  => 'POST',
            'model'   => $player,
            'url'     => route('admin.player.bowling', $player->id)
        ])->add('Submit', 'submit', [
            'attr' => ['class' => 'btn btn-success col-xs-12']
        ]);
        return view($this->view_path.'form', compact('form', 'battingForm', 'bowlingForm', 'player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\PlayerRequest  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(PlayerRequest $request, Player $player)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $player->update($data);
            $url        =   Helper::imageUpload($request, 'avatar_url');
            if ($url) {
                $player->avatar_url =   $url;
            }
            $player->save();
            DB::commit();
            return redirect()->route('admin.players.index')
                            ->with('message', trans('admin.player.update'));
        } catch (\Exception $ex) {
            DB::rollBack();
            \Log::error('PlayerController@update '.$ex->getMessage(). ' Line:-'.$ex->getLine());
            return back()->withErrors($ex->getMessage())
                        ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        try {
            $player->delete();
            return redirect()->route('admin.players.index')
                        ->with('message', trans('admin.player.delete'));
        } catch (\Exception $ex) {
            $message = 'Unable to Delete it\'s associated with this Matches or player histories';
            if ($ex->getCode() == 23000) {
                $message .= ' '.$ex->getMessage();
            }
            return back()->withErrors($message);
        }
    }

    /**
     * Create/Update Batting records.
     *
     * @param  \App\Http\Requests\Admin\PlayerBattingRequest  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function handleBatting(PlayerBattingRequest $request, Player $player)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
            $matchThese = ['player_id' => $player->id,
                        'match_type' => $request->match_type
                    ];
            $player->battings()
                    ->updateOrCreate($matchThese, $data);
            DB::commit();
            return redirect()->route('admin.players.index')
                            ->with('message', trans('admin.player.batting_update'));
        } catch (\Exception $ex) {
            DB::rollBack();
            \Log::error('PlayerController@handleBatting '.$ex->getMessage(). ' Line:-'.$ex->getLine());
            return back()->withErrors($ex->getMessage())
                        ->withInput();
        }
    }

    /**
     * Create/Update Batting records.
     *
     * @param  \App\Http\Requests\Admin\PlayerBowlingRequest  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function handleBowling(PlayerBowlingRequest $request, Player $player)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
            $matchThese = ['player_id' => $player->id,
                        'match_type' => $request->match_type
                    ];
            $data['matches'] = $request->bowling_matches;
            $data['innings'] = $request->bowling_innings;
            $player->bowlings()
                    ->updateOrCreate($matchThese, $data);
            DB::commit();
            return redirect()->route('admin.players.index')
                            ->with('message', trans('admin.player.bowling_update'));
        } catch (\Exception $ex) {
            DB::rollBack();
            \Log::error('PlayerController@handleBowling '.$ex->getMessage(). ' Line:-'.$ex->getLine());
            return back()->withErrors($ex->getMessage())
                        ->withInput();
        }
    }

    /**
     * Get a list of team players.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getTeamPlayers(Request $request)
    {
        $players = Player::whereIn('team_id', [$request->team1, $request->team2])
                        ->select(
                            DB::raw("CONCAT(first_name,' ',COALESCE(`last_name`,'')) AS name"),
                            'id'
                        )
                        ->pluck('name', 'id')
                        ->toArray();

        return $this->listResponse($players);
    }
}
