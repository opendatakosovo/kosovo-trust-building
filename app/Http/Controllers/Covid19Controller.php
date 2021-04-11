<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menulist;
use App\Models\Menus;
use Illuminate\Support\Facades\Config;
use Illuminate\Validation\Rule;
class Covid19Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $locale = Config::get('app.locale');
        return view('frontend.covid19.'.$locale);
    }
}
