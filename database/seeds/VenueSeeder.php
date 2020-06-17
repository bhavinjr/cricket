<?php

use Illuminate\Database\Seeder;
use App\Models\Venue;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Venue::create([
        	'name' => 'M. Chinnaswamy stadium'
        ]);
        Venue::create([
        	'name' => 'Arun jaitley stadium'
        ]);
        Venue::create([
        	'name' => 'Rajiv gandhi stadium'
        ]);
        Venue::create([
        	'name' => 'Swai mansingh stadium'
        ]);
        Venue::create([
        	'name' => 'Eden gardens'
        ]);
        Venue::create([
        	'name' => 'IS Bindra stadium'
        ]);
        Venue::create([
        	'name' => 'Wankhede stadium'
        ]);
        Venue::create([
        	'name' => 'M.A Chidambarram stadium'
        ]);
    }
}
