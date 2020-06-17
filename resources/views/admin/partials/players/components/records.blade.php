<div class="col-md-6">
    <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                <div class="form-body">
                	<strong>Batting</strong>
                    <div class="row">
                    	@forelse($player->battings as $batting)
	                    	<div class="col-md-4">
		                    	<strong>{{ $batting->getMatchType() }} Records</strong>
		                    	<li>
		                    		Matches: {{ $batting->matches }}
		                    	</li>
		                    	<li>
		                    		Innings: {{ $batting->innings }}
		                    	</li>
		                    	<li>
		                    		Runs: {{ $batting->runs }}
		                    	</li>
		                    	<li>
		                    		Highest: {{ $batting->highest }}
		                    	</li>
		                    	<li>
		                    		NO: {{ $batting->not_outs }}
		                    	</li>
		                    	<li>
		                    		50s: {{ $batting->fifties }}
		                    	</li>
		                    	<li>
		                    		100s: {{ $batting->hundreds }}
		                    	</li>
		                    	<li>
		                    		4s: {{ $batting->fours }}
		                    	</li>
		                    	<li>
		                    		6s: {{ $batting->sixes }}
		                    	</li>
	                    	</div>
                    	@empty
                    		<div class="col-md-4">
                    			No records
                    		</div>
                    	@endforelse
                    </div>
                    <br/>
                    <strong>Bowling</strong>
                    <div class="row">
                    	@forelse($player->bowlings as $bowling)
	                    	<div class="col-md-4">
		                    	<strong>{{ $bowling->getMatchType() }} Records</strong>
		                    	<li>
		                    		Matches: {{ $bowling->matches }}
		                    	</li>
		                    	<li>
		                    		Innings: {{ $bowling->innings }}
		                    	</li>
		                    	<li>
		                    		Wickets: {{ $bowling->wickets }}
		                    	</li>
		                    	<li>
		                    		5W: {{ $bowling->five_wickets }}
		                    	</li>
		                    	<li>
		                    		10W: {{ $bowling->ten_wickets }}
		                    	</li>
	                    	</div>
                    	@empty
                    		<div class="col-md-4">
                    			No records
                    		</div>
                    	@endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>