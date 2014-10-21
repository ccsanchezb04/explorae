<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_model 
{
    var $id_usuario           = '';
    var $nombres              = '';
    var $apellidos            = '';
    var $no_identificacion    = '';
    var $email                = '';    
    var $password             = '';
    var $tel_fijo             = '';
    var $tel_movil            = '';
    var $direccion_residencia = '';    
    var $ciudad_residencia    = '';
    var $tipo_usuario         = '';
    var $estado               = '';    
    var $fecha_registro       = '';
    
    public function mostrar()
    {
        $query = $this->db->get('usuarios');
        return $query->result();
    }

    public function validateUser()
    {
        $this->no_identificacion = $this->input->post('id');
        $this->password          = $this->input->post('password');
    
        $this->db->from('usuarios');
        $this->db->where('no_identificacion', $this->no_identificacion);
        $this->db->where('password', $this->password);
        $this->db->limit(1);
        
        $query = $this->db->get();
            
        
        foreach ($query->result() as $key) 
        {
            $this->session->set_userdata(array('idUser'=>$key->id_usuario,
                                               'nameUser'=>$key->nombres,
                                               'checkUser'=>$key->no_identificacion,
                                               'roleUser'=>$key->tipo_usuario));
        }
        if ($query->num_rows() > 0) 
        {
            redirect('/login', 'refresh');
        }
        else
        {
            echo "<script>";
            echo "alert('No. de Identificacion O Contraseña Incorrectos');";
            echo "window.location.replace('".base_url()."');";
            echo "</script>";
        }      
    }
}