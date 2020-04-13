<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\GeneralSettingsRequest;

class SettingsController extends Controller
{
    public function edit()
    {
        return view('settings.index');
    }

    public function updateGeneralSettings(GeneralSettingsRequest $request)
    {
        Setting::all()->each(function ($setting) use ($request) {

            if($setting->name === 'company_address') {

                $company_address =  [
                    'city' => $request->city,
                    'state' => $request->state,
                    'street' => $request->street,
                    'country' => $request->country,
                    'zip_code' => $request->zip_code,
                ];

                $request->merge(['company_address' => json_encode($company_address)]);
            }


            $setting->update(['value' => $request[$setting->name]]);
        });

        // print_r($request->all());
        // print_r(Setting::all()->toArray());
    }

    public function updateSecuritySettings(Request $request)
    {
    	// echo "<pre>";
    	// print_r($request->all());
    }

    public function updateBillingSettings(Request $request)
    {
    	// echo "<pre>";
    	// print_r($request->all());
    }
}
