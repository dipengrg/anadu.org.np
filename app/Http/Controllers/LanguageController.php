<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Switch the application language
     */
    public function setLanguage(Request $request, String $language)
    {
        // Validate the language
        if (in_array($language, ['en', 'ne'])) {
            session(['language' => $language]);
        }

        return redirect()->back();
    }
}
