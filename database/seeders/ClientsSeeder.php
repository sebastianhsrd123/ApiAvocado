<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Clients')->insert([
        	[
	        	'name' => 'Alex Oscar',
	        	'lastname' => 'Gamarra Solis',
	        	'password' => 'hugo8520',
	        	'email' => 'alex@gmail.com',
	        	'direction' => 'Jr. Ramón Castilla 110'
            ]
        ]);
        //
    }
}
