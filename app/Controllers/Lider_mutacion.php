<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Lider_mutacion extends BaseController
{

    public function index()
    {
        return view('cabecera_view').
        view('tabs_lmutacion_view').
        view('pie_view');
       

    }
   
    public function mostrar_tab()
    {
		$vista = $_POST['vista'];
		    
		return view($vista);
        
    }

    
}
