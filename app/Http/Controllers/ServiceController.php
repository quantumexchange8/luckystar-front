<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function serviceMobileApp()
    {
        return view("service/mobileApp");
    }

    public function serviceMT5()
    {
        return view("service/mt5");
    }

        public function serviceMT4()
    {
        return view("service/mt4");
    }
}
