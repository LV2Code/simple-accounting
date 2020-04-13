<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
           	[
	            'name' => 'company_name',
	            'group' => 'general',
	            'value' => 'Company'
        	],
           	[
	            'name' => 'company_address',
	            'group' => 'general',
	            'value' => json_encode([
	            	'country' => 'IN',
	            	'street' => '',
	            	'city' => '',
	            	'state' => '',
	            	'zip_code' => '',
	            ]),
        	],
           	[
	            'name' => 'first_name',
	            'group' => 'general',
	            'value' => ''
        	],
           	[
	            'name' => 'last_name',
	            'group' => 'general',
	            'value' => ''
        	],
           	[
	            'name' => 'email',
	            'group' => 'general',
	            'value' => ''
        	],
           	[
	            'name' => 'contact_number',
	            'group' => 'general',
	            'value' => ''
        	],
        ]);
    }
}
