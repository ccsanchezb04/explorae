<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homeadmin extends CI_model 
{
    //=====================================================================
    //======================== VARIABLES USUARIO ==========================
    var $id_usuario           = '';
    var $nombres              = '';
    var $apellidos            = '';
    var $no_identificacion    = '';
    var $email                = '';    
    var $password             = '';
    var $telefono_fijo        = '';
    var $telefono_movil       = '';
    var $direccion_residencia = '';    
    var $ciudad_residencia    = '';
    var $tipo_usuario         = '';
    var $estado               = '';    
    var $fecha_registro       = '';
    //=====================================================================
    //=====================================================================
    
    /*=====================================================================================================================================================================*/
    /*======================================================= USUARIOS ====================================================================================================*/
    /*=====================================================================================================================================================================*/
    public function lstUsers($id)
    {
        $query = $this->db->get_where('usuarios', array('id_usuario' => $id));
        return $query->result();
    }
    public function lstAdmin()
    {
        $query = $this->db->get_where('usuarios', array('tipo_usuario' => 'admin'));
        return $query->result();
    }
    public function lstAsesor()
    {
        $query = $this->db->get_where('usuarios', array('tipo_usuario' => 'asesor'));
        return $query->result();
    }
    public function lstCliente()
    {
        $query = $this->db->get_where('usuarios', array('tipo_usuario' => 'cliente'));
        return $query->result();
    }

    public function add_user()
    {
        $this->id_usuario           = $this->input->post('id');
        $this->nombres              = $this->input->post('nombres');
        $this->apellidos            = $this->input->post('apellidos');
        $this->no_identificacion    = $this->input->post('no_identificacion'); 
        $this->email                = $this->input->post('email');
        $this->password             = $this->input->post('password');       
        $this->telefono_fijo        = $this->input->post('tel_fijo');
        $this->telefono_movil       = $this->input->post('tel_movil');  
        $this->direccion_residencia = $this->input->post('direccion');      
        $this->ciudad_residencia    = $this->input->post('ciudad');      
        $this->tipo_usuario         = $this->input->post('tipo_usuario');
        $this->estado               = $this->input->post('estado');      
        $this->fecha_registro       = $this->input->post('fecha_registro'); 

        if (!$this->db->insert('usuarios', $this)) 
        {
            //echo mysql_error($query);
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Adicionar el Usuario!');";
            echo "</script>";
        }
        else
        {
            //echo mysql_error($query);
            echo "<script type='text/javascript'>";
            echo "alert('El usuario se adiciono con exito....!');";
            //echo "window.location.replace('".base_url()."Admin');";
            echo "</script>";
        }
    }
    public function upd_user($id)
    {
        $this->id_usuario           = $this->input->post('id');
        $this->nombres              = $this->input->post('nombres');
        $this->apellidos            = $this->input->post('apellidos');
        $this->no_identificacion    = $this->input->post('no_identificacion'); 
        $this->email                = $this->input->post('email');
        $this->password             = $this->input->post('password');       
        $this->telefono_fijo        = $this->input->post('tel_fijo');
        $this->telefono_movil       = $this->input->post('tel_movil');  
        $this->direccion_residencia = $this->input->post('direccion');      
        $this->ciudad_residencia    = $this->input->post('ciudad');      
        $this->tipo_usuario         = $this->input->post('tipo_usuario');
        $this->estado               = $this->input->post('estado');      
        $this->fecha_registro       = $this->input->post('fecha_registro'); 

        $this->db->where('id_usuario', $this->id);

        if (!$this->db->update('usuarios', $this)) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Modificar el Usuario!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El usuario se modifico con exito....!');";
            echo "window.location.replace('".base_url()."Admin');";
            echo "</script>";
        }
    }
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/      
}