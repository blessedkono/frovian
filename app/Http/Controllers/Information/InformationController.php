<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //

    public function aboutUs()
    {
        return view('information.about_us');
    }

    public function contactUs()
    {
        return view('information.contact_us');
    }

    public function publication()
    {
        return view('information.publication');
    }
}
