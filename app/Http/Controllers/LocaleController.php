<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function switch($locale)
    {
        if (array_key_exists($locale, config()->get('languages'))) {
            session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}
