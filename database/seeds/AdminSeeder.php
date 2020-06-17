<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
        	'name' => 'Admin',
        	'email' 	=> 'admin@cricket.com',
        	'password' 	=> Hash::make('dev#cricket@10')
        ]);
    }
}
