<?php

namespace App\Models;
use CodeIgniter\Model;

class Lmutacion_model extends Model{

    protected $table = 'lmutacion_radicaciones';
    protected $allowedFields = ['numero','tramite','id_predio','fecha_radicacion','dias_tramite','estado_tramite','req_visita'];

    public function get($numeroR=null){
        if($numeroR == null){
            return $this->findAll();
        }

        return $this->asArray()->where(['numero' => $numeroR])->first();
    }

}

?>