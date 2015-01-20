<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_client extends CI_model 
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
    public function lstClients($id)
    {
        $query = $this->db->get_where('clientes', array('id_cliente' => $id));
        return $query->result();
    }
    public function lstClienteWeb()
    {
        $query = $this->db->get_where('clientes', array('procedencia' => 'web'));
        return $query->result();
    }
    public function lstClienteForm()
    {
        $query = $this->db->get_where('clientes', array('procedencia' => 'formulario'));
        return $query->result();
    }

    public function add_client()
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
        $this->procedencia          = $this->input->post('procedencia');
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

    public function upd_client($id)
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
        $this->procedencia          = $this->input->post('procedencia');
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

    public function act_client($id)
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
            echo "window.location.replace('".base_url()."Asesor/asesor_admin');";
            echo "</script>";
        }

    }

    public function inact_client($id)
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
            echo "window.location.replace('".base_url()."Asesor/asesor_admin');";
            echo "</script>";
        }
    }

    public function dlt_client($id)
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
            echo "window.location.replace('".base_url()."Asesor/asesor_admin');";
            echo "</script>";
        }
    }

    public function buscarClients($id)
    {
        $this->db->like('id', $id);        
        $query = $this->db->get('clientes');

        return $query->result();
    }
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/      
}