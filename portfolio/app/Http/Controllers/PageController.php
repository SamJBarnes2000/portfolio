<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view ("welcome");
    }

    public function sprint1()
    {
        return view ("sprint1");
    }

    public function sprint2()
    {
        return view ("sprint2");
    }

    public function sprint3()
    {
        return view ("sprint3");
    }

    public function sprint4()
    {
        return view ("sprint4");
    }

    public function sprint5()
    {
        return view ("sprint5");
    }

    public function sprint6()
    {
        return view ("sprint6");
    }

    public function aftersprints()
    {
        return view ("aftersprints");
    }
}
