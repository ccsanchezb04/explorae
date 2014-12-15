<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homeadmin extends CI_model 
{
    //=====================================================================
    //======================== VARIABLES cliente ==========================
    var $id_cliente           = '';
    var $nombres              = '';
    var $apellidos            = '';
    var $no_identificacion    = '';
    var $email                = '';    
    var $telefono_fijo        = '';
    var $telefono_movil       = '';
    var $direccion_residencia = '';    
    var $ciudad_residencia    = '';
    var $procedencia          = '';
    var $estado               = '';    
    var $fecha_registro       = '';
    //=====================================================================
    //=====================================================================
    
    /*=====================================================================================================================================================================*/
    /*======================================================= clientes ====================================================================================================*/
    /*=====================================================================================================================================================================*/
    public function lstUsers($id)
    {
        $query = $this->db->get_where('clientes', array('id_cliente' => $id));
        return $query->result();
    }
    public function lstCliente()
    {
        $query = $this->db->get_where('clientes', array('tipo_cliente' => 'cliente'));
        return $query->result();
    }

    public function add_user()
    {
        $this->id_cliente           = $this->input->post('id');
        $this->nombres              = $this->input->post('nombres');
        $this->apellidos            = $this->input->post('apellidos');
        $this->no_identificacion    = $this->input->post('no_identificacion'); 
        $this->email                = $this->input->post('email');   
        $this->telefono_fijo        = $this->input->post('tel_fijo');
        $this->telefono_movil       = $this->input->post('tel_movil');  
        $this->direccion_residencia = $this->input->post('direccion');      
        $this->ciudad_residencia    = $this->input->post('ciudad');      
        $this->tipo_cliente         = $this->input->post('tipo_cliente');
        $this->estado               = $this->input->post('estado');      
        $this->fecha_registro       = $this->input->post('fecha_registro'); 

        if (!$this->db->insert('clientes', $this)) 
        {
            //echo mysql_error($query);
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Adicionar el cliente!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El cliente se adiciono con exito....!');";
            echo "</script>";
        }
    }

    public function upd_user($id)
    {
        $this->id_cliente           = $this->input->post('id');
        $this->nombres              = $this->input->post('nombres');
        $this->apellidos            = $this->input->post('apellidos');
        $this->no_identificacion    = $this->input->post('no_identificacion'); 
        $this->email                = $this->input->post('email');
        $this->telefono_fijo        = $this->input->post('tel_fijo');
        $this->telefono_movil       = $this->input->post('tel_movil');  
        $this->direccion_residencia = $this->input->post('direccion');      
        $this->ciudad_residencia    = $this->input->post('ciudad');      
        $this->tipo_cliente         = $this->input->post('tipo_cliente');
        $this->estado               = $this->input->post('estado');      
        $this->fecha_registro       = $this->input->post('fecha_registro'); 

        $this->db->where('id_cliente', $id);

        if (!$this->db->update('clientes', $this)) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Modificar el cliente!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El cliente se modifico con exito....!');";
            echo "</script>";
        }
    }

    public function act_user($id)
    {        
        $this->estado = "Activo";
        $this->db->where('id_cliente', $id);
        if (!$this->db->update('clientes', array('estado'=> $this->estado))) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al cambiar el estado');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El estado del cliente es: ".$this->estado."');";
            echo "window.location.replace('".base_url()."Admin');";
            echo "</script>";
        }

    }

    public function inact_user($id)
    {        
        $this->estado = "Inactivo";
        $this->db->where('id_cliente', $id);
        if (!$this->db->update('clientes', array('estado'=> $this->estado))) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al cambiar el estado');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El estado del cliente es: ".$this->estado."');";
            echo "window.location.replace('".base_url()."Admin');";
            echo "</script>";
        }
    }

    public function dlt_user($id)
    {
        $this->id_cliente = $id;
        $this->db->where('id_cliente', $this->id_cliente);

        if (!$this->db->delete('clientes')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Eliminar el cliente!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El cliente se elimino con exito....!');";
            echo "window.location.replace('".base_url()."Admin');";
            echo "</script>";
        }
    }
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/      
}