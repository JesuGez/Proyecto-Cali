<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuarios_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('America/Bogota');
        parent::__construct();
    }

    function Get_usuarios_Todos()
    {
        $this->db->select('u.id as id_usuario,
        u.username as username_usuario,
        u.nombres as nombre_usuario,
        u.apellidos as apellidos_usuario,
        u.documento as documento_usuario,
        u.e_mail as email_usuario,
        u.telefono as telefono_usuario,
        u.estado as estado_usuario,
        u.notificaciones as notificaciones,
        u.programa_inicio as programa_inicio,
        p.nombre as nombre_pais,
        c.id_cargo as id_cargo,
        pp.estado as estado_usu_proyec', false);
      $this->db->from('users u');
      $this->db->join('paises p','p.id = u.id_pais','LEFT');
      $this->db->join('cargos c','c.id_cargo = u.id_cargo','LEFT');
      $this->db->join('proyectos_permisos pp','pp.usuario_id = u.id','LEFT');
    
      $Query = $this->db->get(); 
      return $Query->result_array();
    }

    function Get_usuarios_Todos1($id_proyecto)
    {
        $this->db->select('u.id as id_usuario,
        u.username as username_usuario,
        u.nombres as nombre_usuario,
        u.apellidos as apellidos_usuario,
        u.documento as documento_usuario,
        u.e_mail as email_usuario,
        u.telefono as telefono_usuario,
        u.estado as estado_usuario,
        u.notificaciones as notificaciones,
        u.programa_inicio as programa_inicio,
        p.nombre as nombre_pais,
        pp.estado as estado_usu_proyec', false);
      $this->db->from('users u');
      $this->db->join('paises p','p.id = u.id_pais','LEFT');
      $this->db->join('proyectos_permisos pp','pp.usuario_id = u.id and pp.proyecto_id = "'.$id_proyecto.'"','LEFT');
    
      $Query = $this->db->get(); 
      return $Query->result_array();
    }

    function Get_usuario($id_usuario)
    {
        $this->db->select('u.id as id_usuario,
        u.username as username_usuario,
        u.nombres as nombre_usuario,
        u.apellidos as apellidos_usuario,
        u.documento as documento_usuario,
        u.e_mail as email_usuario,
        u.telefono as telefono_usuario,
        u.estado as estado_usuario,
        u.id_pais as id_pais,
        u.notas as notas,
        u.notificaciones as notificaciones,
        u.tipo_menu as tipo_menu,
        u.programa_inicio as programa_inicio,
        p.nombre as nombre_pais,        
        c.id_cargo as id_cargo', false);
      
      $this->db->where('u.id', $id_usuario); 
      $this->db->from('users u');
      $this->db->join('paises p','p.id = u.id_pais','LEFT');      
      $this->db->join('cargos c','c.id_cargo = u.id_cargo','LEFT');
      $Query = $this->db->get(); 
      return $Query->row();
    }

         
    public function grabo_usuarios($data)
    { 
        $this->db->insert('users', $data);       
        return $this->db->insert_id(); 
    }

    public function modifico_usuarios($data,$id)
    { 
        $this->db->where('id', $id);
        $this->db->update('users', $data);       
        return $this->db->affected_rows();
    }

    
    public function Get_Bancos_Todos()
    {     
        $this->db->select('*');
        $this->db->from('bancos');
        $this->db->where('estado', 'ACTIVO');
        $this->db->order_by('nombre', 'ASC');

        $query = $this->db->get();
        return $query->result_array(); 
    } 


    public function Get_Roles_TOdos()
    {     
        $this->db->select('*');
        $this->db->from('roles');
        $this->db->where('estado', 'ACTIVO');
        $this->db->order_by('nombre', 'ASC');

        $query = $this->db->get();
        return $query->result_array(); 
    } 
    
    public function Get_Cargos_TOdos()
    {     
        $this->db->select('*');
        $this->db->from('cargos');
        $this->db->where('estado', 'ACTIVO');
        $this->db->order_by('nombre', 'ASC');

        $query = $this->db->get();
        return $query->result_array(); 
    }  
    
    public function Get_Menu_Todos($usuario_id)
    {     
        $this->db->select('p.*,
        p.url as url,
        p.nombre as nombre_programa,
        m.numero as numero_modulo,
        m.nombre as nombre_modulo,
        m.imagen as imagen_modulo', false);
        $this->db->from('modulos_programas_usuarios u');
        $this->db->where('u.usuario_id ', $usuario_id);
        $this->db->join('modulos_programas p','p.id = u.programa_id','LEFT');
        $this->db->join('modulos m','m.id = p.modulo_id','LEFT');

        $query = $this->db->get();
        return $query->result_array(); 
    } 

    public function Get_permisos_Todos($usuario_id)
    {     
        $this->db->select('p.*,
        p.url as url,
        p.nombre as nombre_programa,
        p.descripcion as descripcion_programa,
        u.usuario_id as usuario_id,
        u.modificar as modificar,
        crear as crear,
        borrar as borrar,
        modificar as modificar,
        m.numero as numero_modulo,
        m.nombre as nombre_modulo,
        m.imagen as imagen_modulo', false);
        $this->db->from('modulos_programas p');
    //    $this->db->where('u.usuario_id ', $usuario_id);
        $this->db->join('modulos_programas_usuarios u','u.programa_id = p.id and u.usuario_id = "'.$usuario_id.'"','LEFT');
         $this->db->join('modulos m','m.id = p.modulo_id','LEFT');

        $query = $this->db->get();
        return $query->result_array(); 
    } 


    public function Get_Mensajes_Todos($usuario_id)
    {     
        $this->db->select('
        m.tipo as tipo_mensaje,
        m.nombre as nombre_mensaje,
        m.leido as leido_mensaje', false);
        $this->db->from('mensajes m');
     //   $this->db->where('u.usuario_id', $usuario_id);
        $this->db->where('m.usuario_id', $usuario_id);
      
        $query = $this->db->get();
        return $query->result_array(); 
    }   

    public function get_usuarios_permisos($usuario_id,$prorama_id)
    {     
        $this->db->select('*');
        $this->db->from('modulos_programas_usuarios');
        $this->db->where('usuario_id', $usuario_id);
        $this->db->where('programa_id', $prorama_id);
       // $this->db->order_by('nombre', 'DESC');

        $query = $this->db->get();
        return $query->row_array(); 
    }

    public function grabo_usuarios_permisos($data)
    { 
        $this->db->insert('modulos_programas_usuarios', $data);       
        return $this->db->insert_id(); 
    }

    public function modifico_usuarios_permisos($usuario_id,$prorama_id)
    { 
        $this->db->where('usuario_id', $usuario_id);
        $this->db->where('programa_id', $prorama_id);
        $this->db->delete('modulos_programas_usuarios');       
        return $this->db->affected_rows();
    }

    public function modifico_usuarios_permisos_tipo_menu($data,$usuario_id)
    { 

        $this->db->where('id', $usuario_id);
        $this->db->update('users', $data);       
        return $this->db->affected_rows();

    }

    public function modifico_usuarios_permisos_detalle($data,$programa_id)
    { 

        $this->db->where('programa_id', $programa_id);
        $this->db->update('modulos_programas_usuarios', $data);       
        return $this->db->affected_rows();

    }



}