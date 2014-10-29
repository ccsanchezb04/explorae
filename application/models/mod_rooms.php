<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_rooms extends CI_model 
{
    //=====================================================================
    //======================== VARIABLES USUARIO ==========================
    var $id_salon            = '';
    var $nombre_salon        = '';
    var $precio_alquiler     = '';
    var $direccion_ubicacion = '';
    var $total_capacidad     = '';    
    var $nombre_contacto     = '';
    var $telefono_contacto   = '';
    var $email_contacto      = '';
    var $imagen_salon        = '';    
    //=====================================================================
    //=====================================================================
    
    /*=====================================================================================================================================================================*/
    /*======================================================= USUARIOS ====================================================================================================*/
    /*=====================================================================================================================================================================*/
    public function lstUsers($id)
    {
        $query = $this->db->get('salones');
        return $query->result();
    }

    public function add_room()
    {
        $this->id_salon            = $this->input->post('id');
        $this->nombre_salon        = $this->input->post('nombre_salon');
        $this->precio_alquiler     = $this->input->post('precio_alquiler');
        $this->direccion_ubicacion = $this->input->post('direccion_ubicacion'); 
        $this->total_capacidad     = $this->input->post('total_capacidad');
        $this->nombre_contacto     = $this->input->post('nombre_contacto');       
        $this->telefono_contacto   = $this->input->post('tel_contacto');
        $this->email_contacto      = $this->input->post('email_contacto');  
        $this->imagen_salon        = $this->input->post('imagen_salon'); 

        if (!$this->db->insert('salones', $this)) 
        {
            //echo mysql_error($query);
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Adicionar el Usuario!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El usuario se adiciono con exito....!');";
            echo "</script>";
        }
    }

    public function upd_room($id)
    {
        $this->id_salon            = $this->input->post('id');
        $this->nombre_salon        = $this->input->post('nombre_salon');
        $this->precio_alquiler     = $this->input->post('precio_alquiler');
        $this->direccion_ubicacion = $this->input->post('direccion_ubicacion'); 
        $this->total_capacidad     = $this->input->post('total_capacidad');
        $this->nombre_contacto     = $this->input->post('nombre_contacto');       
        $this->telefono_contacto   = $this->input->post('tel_contacto');
        $this->email_contacto      = $this->input->post('email_contacto');  
        $this->imagen_salon        = $this->input->post('imagen_salon');      
        $this->db->where('id_salon', $id);

        if (!$this->db->update('salones', $this)) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Modificar el Usuario!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El usuario se modifico con exito....!');";
            echo "</script>";
        }
    }

    public function dlt_room($id)
    {
        $this->id_salon = $id;
        $this->db->where('id_salon', $this->id_salon);

        if (!$this->db->delete('salones')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Eliminar el Usuario!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El usuario se elimino con exito....!');";
            echo "window.location.replace('".base_url()."Admin');";
            echo "</script>";
        }
    }
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/      
}