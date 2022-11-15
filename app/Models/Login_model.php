<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
        //configuracion y cargar la libreria de sesiones
       // $config['encryption_key'] = "osc";
        //$this->load->library('session', $config);
        date_default_timezone_set('America/Bogota');
        parent::__construct();
    }


  
function validar_login($username, $password)
{
  $this->db->select('u.id,
  u.username as username,
  u.documento as documento,
  u.nombres as nombres,
  u.apellidos as apellidos,
  u.e_mail as e_mail,
  u.telefono as telefono,
  u.f_nacimiento as f_nacimiento,
  u.tipo_menu as tipo_menu,
  p.nombre as nombre_pais,
  m.url as url, 
  c.nombre as nombre_cargo', false);
$this->db->where('u.username', $username);
$this->db->where('password', $password);
$this->db->where('u.estado', 'ACTIVO');
$this->db->from('users u'); 
$this->db->join('paises p','p.id = u.id_pais', 'LEFT');
$this->db->join('cargos c','c.id_cargo = u.id_cargo', 'LEFT');  
$this->db->join('modulos_programas m','m.id = u.programa_inicio', 'LEFT');      
$Query = $this->db->get(); 
 
  return ($Query->num_rows() > 0) ? $Query->result_array() : array();
 
  //if($query->num_rows() >0){              
  //  return $query->num_rows();            
  //  }
}
function valid_user_ajax($username){
            
    $this->db->where('username', $username);
    $query = $this->db->get('users');
        
         if($query->num_rows() >0){              
             echo $query->num_rows();            
             }
  }

  function login_log($params)
  {
    $this->db->insert('login_log',$params);
    return $this->db->insert_id();
  }

  function validar_password($email)

  {
               
    $this->db->where('e_mail', $email);
    $query = $this->db->get('users');

    if($query->num_rows() >0){              
     
      return $query->row_array();  
      
      }else{
        return $query->num_rows();

      }

    
  }

  public function grabar_token($data,$id)
  { 
      $this->db->where('id', $id);
      $this->db->update('users', $data);       
      return $this->db->affected_rows();
  }

  function validar_token($token, $idusuario){            
   // $this->db->where('id', $idusuario);
    $this->db->where('token', $token);
    $query = $this->db->get('users');        
    if($query->num_rows() >0){
      return $query->row_array();       
      }else{
        return $query->num_rows();
      }
  }

  public function nueva_password($data,$id)
  { 
      $this->db->where('id', $id);
      $this->db->update('users', $data);       
      return $this->db->affected_rows();
  }

  



}