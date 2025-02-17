<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function change(Request $request)

    {


        $lang = $request->lang;


    
    // Set language
    App::setLocale($lang);
    session()->put('locale', $lang);

    // Set text direction based on language
    $direction = ($lang === 'ar') ? 'rtl' : 'ltr';
    session()->put('direction', $direction);

    return redirect()->back();


    }

    public function index()

    {

        return view('welcome');

    }
}
