<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Tecnico_visitasTerreno extends BaseController
{

    public function index()
    {
        return view('cabecera_view_tv').
        view('tabs_tVisitas_view').
        view('pie_view');
       

    }
   
    public function mostrar_tab()
    {
		$vista = $_POST['vista'];
		    
		return view($vista);
        
    }

    
}
