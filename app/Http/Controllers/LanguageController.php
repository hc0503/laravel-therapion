<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function swap($locale) {
        $availableLocale = [
            'en' => 'en',
            'fr' => 'fr',
            'de' => 'de',
            'pt' => 'pt'
        ];
        if (array_key_exists($locale, $availableLocale)) {
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
