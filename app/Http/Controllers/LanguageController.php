<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLanguage(Request $request)
    {
        $locale = $request->input('lang'); // Get the selected language from the form

        // Check if the selected language is supported
        if (in_array($locale, config('app.languages'))) {
            Session::put('locale', $locale); // Save the language to session
            App::setLocale($locale); // Change the application locale
        }
        Session::put('locale', $locale);
dd(Session::get('locale'));  // Check if this shows the correct locale

        return redirect()->back(); // Redirect back to the previous page
    }
}
