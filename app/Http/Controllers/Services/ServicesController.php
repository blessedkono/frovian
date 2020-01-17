<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //

    public function strategy()
    {
        return view('services.strategy');
    }

    public function operations()
    {
        return view('services.operations');
    }

    public function transformation()
    {
        return view('services.transformations');
    }

    public function sustainability()
    {
        return view('services.sustainability');
    }

    public function businessDevelopment()
    {
        return view('services.business_development');
    }

    public function analysticsConsulting()
    {
        return view('services.analystics_consulting');
    }

    public function lawService()
    {
        return view('services.law_service');
    }

    public function riskManagement()
    {
        return view('services.risk_management');
    }

}
