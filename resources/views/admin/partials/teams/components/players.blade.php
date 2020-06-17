<div class="col-md-6">
    <div class="panel">
        <div class="p-20">
            <div class="row">
                <div class="col-xs-8">
                    <h4 class="m-b-0">Players</h4>
                </div>
            </div>
        </div>
        <div class="panel-footer bg-extralight">
            <ul class="earning-box">
                @forelse($players as $player)
                    <li>
                        <div class="er-row">
                            <div class="er-pic"><img src="{{ $player->avatar_url }}" alt="varun" width="60" class="img-circle"></div>
                            <div class="er-text">
                                <h3>{{ $player->full_name }}</h3><span class="text-muted">{{ $player->country->name }}</span></div>
                            <div class="er-count "><span class="counter">{{ $player->jersey_number }}</span></div>
                        </div>
                    </li>
                @empty
                    <li class="center">
                        <a class="p-10">No players</a>
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
</div>