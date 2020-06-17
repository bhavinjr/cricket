<template>
	<div class="panel-body">
		<div class="row">
			<div class="form-group" :class="{'has-error': errors.has('Match type')}">
				<label class="control-label required">Match type</label> 
				<select v-validate="'required'" name="Match type" v-model="match.match_type" class="form-control">
					<option :value="null">--Select--</option>
					<option v-for="(option, index) in match_types" :key="index" :value="index" v-text="option"/>
				</select>
				<div class="text-danger">{{ errors.first('Match type') }}</div>
			</div>

			<div class="form-group" :class="{'has-error': errors.has('Team 1')}">
				<label class="control-label">Team 1 (Host)</label> 
				<select v-validate="'required'" name="Team 1" v-model.number="match.team_1" class="form-control">
					<option :value="null">--Select--</option>
					<option v-for="(option, index) in teams" :key="index" :value="index" v-text="option" />
				</select>
				<div class="text-danger">{{ errors.first('Team 1') }}</div>
			</div>

			<div class="form-group" :class="{'has-error': errors.has('Team 2')}">
				<label class="control-label">Team 2 (Visitor)</label>
				<select v-validate="{required:true,is_not: match.team_1}" name="Team 2" v-model.number="match.team_2" class="form-control">
					<option :value="null">--Select--</option>
					<option v-for="(option, index) in teams" :key="index" :value="index" v-text="option" />
				</select>
				<div class="text-danger">{{ errors.first('Team 2') }}</div>
			</div>

			<div class="form-group" :class="{'has-error': errors.has('Match date')}">
				<label class="control-label">Match date</label>
				<input v-validate="'required|date_format:yyyy-mm-dd'" name="Match date" v-model="match.match_date" type="text" placeholder="yyyy-mm-dd" class="form-control">
				<div class="text-danger">{{ errors.first('Match date') }}</div>
			</div>

            <div class="form-group" :class="{'has-error': errors.has('Match time')}">
				<label class="control-label">Match time</label>
                <input type="time" class="form-control" v-model="match.match_time" name="Match time" v-validate="'required'"> 
                <div class="text-danger">{{ errors.first('Match time') }}</div>
            </div>

			<div class="form-group" :class="{'has-error': errors.has('Venue')}">
				<label class="control-label">Venue</label>
				<select v-validate="'required'" name="Venue" v-model="match.venue_id" class="form-control">
					<option :value="null">--Select--</option>
					<option v-for="(option, index) in venues" :key="index" :value="index" v-text="option" />
				</select>
				<div class="text-danger">{{ errors.first('Venue') }}</div>
			</div>

			<div class="form-group">
				<label class="control-label">Toss winner</label> 
				<select name="Toss winner" v-model="match.toss_winner" class="form-control">
					<option :value="null">No Toss</option>
					<option v-for="(option, index) in playingTeams" :key="index" :value="index" v-text="option" />
				</select>
			</div>

			<div class="form-group" :class="{'has-error': errors.has('Win type')}">
				<label class="control-label">Win type</label>
				<select v-validate="'required'" name="Win type" v-model="match.win_type" class="form-control">
					<option :value="null">--Select--</option>
					<option v-for="(option, index) in win_types" :key="index" :value="index" v-text="option" />
				</select>
				<div class="text-danger">{{ errors.first('Win type') }}</div>
			</div>

			<template v-if="match.win_type==1 || match.win_type==2">
				<div class="form-group" :class="{'has-error': errors.has('Match winner')}">
					<label class="control-label">Match winner</label> 
					<select v-validate="'required'" name="Match winner" class="form-control" v-model="match.match_winner">
						<option :value="null">--Select--</option>
						<option v-for="(option, index) in playingTeams" :key="index" :value="index" v-text="option" />
					</select>
					<div class="text-danger">{{ errors.first('Match winner') }}</div>
				</div>

				<div class="form-group" :class="{'has-error': errors.has('Margin')}">
					<label class="control-label">Margin</label> 
					<input v-validate="'required|min_value:0'" name="Margin" type="number" class="form-control" v-model="match.margin">
					<div class="text-danger">{{ errors.first('Margin') }}</div>
				</div>
			</template>

			<div class="form-group">
				<label class="control-label">Man of the match</label> 
				<select name="Man of the match" v-model="match.man_of_the_match" class="form-control">
					<option :value="null">No one</option>
					<option v-for="(option, index) in team_players" :key="index" :value="index" v-text="option" />
				</select>
			</div>
			<button type="button" class="btn btn-success col-xs-12" @click="checkUpdateValid">Submit</button>
		</div>
	</div>
</template>

<script>
	import {MATCH_TYPES, WIN_TYPES} from '../../../../admin/config'
	import {GET_TEAMS, GET_VENUES, GET_TEAM_PLAYERS} from '../../../../admin/listResources'
	import {STORE_MATCH} from '../../../../admin/resources'	

	export default {
		data() {
			return {
				match_types: MATCH_TYPES,
				win_types: WIN_TYPES,
				match: {
					match_type: null,
					team_1: null,
					team_2: null,
					match_date: null,
					match_time: null,
					venue_id: null,
					toss_winner: null,
					match_winner: null,
					win_type: null,
					margin: 0,
					man_of_the_match: null,
				},
				teams: [],
				venues: [],
				team_players: [],
			}
		},
		watch:{
			match: {
				handler: function(newVal, oldVal) {
					if(newVal.win_type == 3 || newVal.win_type == 4) {
						this.match.match_winner = null
						this.match.margin = 0
					}
				},
				deep: true,
			},
		},
		computed: {
			playingTeams() {
				const team1 = this.match.team_1
				const team2 = this.match.team_2
				if(team1 && team2) {
					this.getTeamPlayers()
					return {
						[team1]: this.teams[team1], 
						[team2]: this.teams[team2]
					}
				}
			}
		},
		async mounted() {
			await this.getTeams()
			await this.getVenues()
		},
		methods: {
			getTeams(transformer = false) {
				GET_TEAMS((res) => {
					this.teams = res.data;
				}, (error) => {
					console.log(error);
				})
			},
			getVenues(transformer = false) {
				GET_VENUES((res) => {
					this.venues = res.data;
				}, (error) => {
					console.log(error);
				})
			},
			getTeamPlayers() {
				GET_TEAM_PLAYERS(`?team1=${this.match.team_1}&team2=${this.match.team_2}`,(res) => {
					this.team_players = res.data;
				}, (error) => {
					console.log(error);
				})
			},
			async checkUpdateValid() {
				this.$validator.validateAll().then((success) => {
					if(success) this.store()
				});
			},
			store() {
				STORE_MATCH(this.match, (res) => {
					console.log(res);
					showSuccess(res.message)
					window.location.href = '/admin/matches'
				}, (error) => {
					console.log(error);
					if(error.data.message) {
						showError(error.data.message)
					}
				})
			},
		}
	}
</script>