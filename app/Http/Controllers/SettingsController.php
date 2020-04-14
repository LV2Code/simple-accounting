<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\GeneralSettingsRequest;
use App\Http\Requests\SecuritySettingsRequest;

class SettingsController extends Controller
{
    public function edit()
    {
        return view('settings.index', ['settings' => Setting::transformed()]);
    }

    public function updateGeneralSettings(GeneralSettingsRequest $request)
    {
        Setting::all()->each(function ($setting) use ($request) {
            $setting->update(['value' => $request[$setting->name]]);
        });

        return redirect()->to(url()->previous() . '#general')
            ->with('success', 'General settings updated successfully!');
    }

    public function updateSecuritySettings(SecuritySettingsRequest $request)
    {
        $user = auth()->user();
        $user->password = \Hash::make($request->password);
        $user->save();

        return redirect()->to(url()->previous() . '#security')
            ->with('success', 'Security settings updated successfully!');
    }

    public function updateBillingSettings(Request $request)
    {
    	// echo "<pre>";
    	// print_r($request->all());
    }
}
