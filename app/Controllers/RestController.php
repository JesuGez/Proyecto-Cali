<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class RestController extends ResourceController{

    protected $modelName = 'App\Models\Lmutacion_model';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

}

?>