<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Lmutacion_model;

class Lmutacion extends ResourceController{

    public function __construct()
    {
        $this->model = $this->setModel(new Lmutacion_model());
    }

    public function index()
    {
        
        $radicaciones = $this->model->get();
        // return $this->respond($radicaciones);
        $total = count($radicaciones);
        $data = array(
            "recordsTotal" => $total,
            "data" => $radicaciones
        );
        echo json_encode($data);

    }

}

?>