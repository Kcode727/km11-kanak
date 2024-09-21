<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function __invoke(Request $request)
    {
        $language = $request->input('lang', 'English');
        session(['language' => $language]);
        return redirect()->back();
    }
}
