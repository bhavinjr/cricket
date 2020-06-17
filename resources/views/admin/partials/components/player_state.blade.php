<div class="row">
    {{-- batting --}}
    <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12">
        <div class="panel">
            <div class="p-20">
                <div class="row">
                    <div class="col-xs-8">
                        <h4 class="m-b-0">Most runs (Test)</h4>
                    </div>
                </div>
            </div>
            <div class="panel-footer bg-extralight">
                <ul class="earning-box">
                    @forelse($runs['test'] as $player)
                    <li>
                        <div class="er-row">
                            <div class="er-pic"><img src="{{$player->player->avatar_url}}" alt="varun" width="60" class="img-circle"></div>
                            <div class="er-text">
                                <h3>{{$player->player->full_name}}</h3><span class="text-muted">{{$player->runs}} runs</span></div>
                            <div class="er-count "><span class="counter"></span>{{$player->matches}}</div>
                        </div>
                    </li>
                    @empty
                        <li class="center">
                            <a class="p-10">No records</a>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12">
        <div class="panel">
            <div class="p-20">
                <div class="row">
                    <div class="col-xs-8">
                        <h4 class="m-b-0">Most runs (ODI)</h4>
                    </div>
                </div>
            </div>
            <div class="panel-footer bg-extralight">
                <ul class="earning-box">
                    @forelse($runs['odi'] as $player)
                    <li>
                        <div class="er-row">
                            <div class="er-pic"><img src="{{$player->player->avatar_url}}" alt="varun" width="60" class="img-circle"></div>
                            <div class="er-text">
                                <h3>{{$player->player->full_name}}</h3><span class="text-muted">{{$player->runs}} runs</span></div>
                            <div class="er-count "><span class="counter"></span>{{$player->matches}}</div>
                        </div>
                    </li>
                    @empty
                        <li class="center">
                            <a class="p-10">No records</a>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12">
        <div class="panel">
            <div class="p-20">
                <div class="row">
                    <div class="col-xs-8">
                        <h4 class="m-b-0">Most runs (T20)</h4>
                    </div>
                </div>
            </div>
            <div class="panel-footer bg-extralight">
                <ul class="earning-box">
                    @forelse($runs['t20'] as $player)
                    <li>
                        <div class="er-row">
                            <div class="er-pic"><img src="{{$player->player->avatar_url}}" alt="varun" width="60" class="img-circle"></div>
                            <div class="er-text">
                                <h3>{{$player->player->full_name}}</h3><span class="text-muted">{{$player->runs}} runs</span></div>
                            <div class="er-count "><span class="counter"></span>{{$player->matches}}</div>
                        </div>
                    </li>
                    @empty
                        <li class="center">
                            <a class="p-10">No records</a>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

    {{-- bowling --}}
    <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12">
        <div class="panel">
            <div class="p-20">
                <div class="row">
                    <div class="col-xs-8">
                        <h4 class="m-b-0">Most wickets (Test)</h4>
                    </div>
                </div>
            </div>
            <div class="panel-footer bg-extralight">
                <ul class="earning-box">
                    @forelse($wickets['test'] as $player)
                    <li>
                        <div class="er-row">
                            <div class="er-pic"><img src="{{$player->player->avatar_url}}" alt="varun" width="60" class="img-circle"></div>
                            <div class="er-text">
                                <h3>{{$player->player->full_name}}</h3><span class="text-muted">{{$player->wickets}} wickets</span></div>
                            <div class="er-count "><span class="counter"></span>{{$player->matches}}</div>
                        </div>
                    </li>
                    @empty
                        <li class="center">
                            <a class="p-10">No records</a>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12">
        <div class="panel">
            <div class="p-20">
                <div class="row">
                    <div class="col-xs-8">
                        <h4 class="m-b-0">Most wickets (ODI)</h4>
                    </div>
                </div>
            </div>
            <div class="panel-footer bg-extralight">
                <ul class="earning-box">
                    @forelse($wickets['odi'] as $player)
                    <li>
                        <div class="er-row">
                            <div class="er-pic"><img src="{{$player->player->avatar_url}}" alt="varun" width="60" class="img-circle"></div>
                            <div class="er-text">
                                <h3>{{$player->player->full_name}}</h3><span class="text-muted">{{$player->wickets}} wickets</span></div>
                            <div class="er-count "><span class="counter"></span>{{$player->matches}}</div>
                        </div>
                    </li>
                    @empty
                        <li class="center">
                            <a class="p-10">No records</a>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12">
        <div class="panel">
            <div class="p-20">
                <div class="row">
                    <div class="col-xs-8">
                        <h4 class="m-b-0">Most wickets (T20)</h4>
                    </div>
                </div>
            </div>
            <div class="panel-footer bg-extralight">
                <ul class="earning-box">
                    @forelse($wickets['t20'] as $player)
                    <li>
                        <div class="er-row">
                            <div class="er-pic"><img src="{{$player->player->avatar_url}}" alt="varun" width="60" class="img-circle"></div>
                            <div class="er-text">
                                <h3>{{$player->player->full_name}}</h3><span class="text-muted">{{$player->wickets}} wickets</span></div>
                            <div class="er-count "><span class="counter"></span>{{$player->matches}}</div>
                        </div>
                    </li>
                    @empty
                        <li class="center">
                            <a class="p-10">No records</a>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>