<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function swap($locale) {
        $availableLocale = [
            'en' => 'en',
            'es' => 'es',
            'pt' => 'pt',
            'fi' => 'fi',
            'se' => 'se',
            'no' => 'no',
            'dk' => 'dk',
            'de' => 'de',
            'nl' => 'nl',
            'fr' => 'fr',
            'it' => 'it',
            'ru' => 'ru',
            'tr' => 'tr',
            'jp' => 'jp',
            'cn' => 'cn',
        ];
        if (array_key_exists($locale, $availableLocale)) {
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
