<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('cabecera_view').
        view('tabs_lmutacion_view').
        view('pie_view');
       

    }
}
