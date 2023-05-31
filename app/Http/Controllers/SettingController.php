<?php
    namespace App\Http\Controllers;
    use App\Models\Setting;
use Illuminate\Http\Request;
    class SettingController extends Controller
    {
        public function getData(Request $request)
        {
            $settings = Setting::all();
            return response()->json($settings);
        }
    }
