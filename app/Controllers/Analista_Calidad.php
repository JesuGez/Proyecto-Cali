<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Analista_Calidad extends BaseController
{

    public function index()
    {
        return view('cabecera_view_acl').
        view('tabs_aCalidad_view').
        view('pie_view');
       

    }
   
    public function mostrar_tab()
    {
		$vista = $_POST['vista'];
		    
		return view($vista);
        
    }

    
}
