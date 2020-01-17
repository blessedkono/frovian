<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    //

    public function law()
    {

        return view('training.law');
    }

    public function coaching()
    {

        return view('training.coaching');
    }

    public function risk()
    {

        return view('training.risk');
    }

    public function academic()
    {

        return view('training.academic');
    }


}
