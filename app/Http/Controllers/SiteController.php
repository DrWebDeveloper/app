<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function lang(Request $request,$locale)
    {
        if (!in_array($locale, ['en', 'es', 'fr'])) {
            abort(400);
        }
        print_r($locale);
        App::setLocale($locale);
    }
}
