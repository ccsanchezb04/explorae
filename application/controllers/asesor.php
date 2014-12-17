<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asesor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();   
        $this->load->model('homeadmin');
        $this->load->model('mod_client');
        /*$this->removeCache();*/
    }

    public function asesor_admin()
    {
        $id = $this->session->userdata('idUser'); 
        $data['lstcw'] = $this->mod_client->lstClienteWeb();
        $data['lstcf'] = $this->mod_client->lstClienteForm();
        $this->load->view('layout/header');
        $this->load->view('asesor/admin', $data);
        $this->load->view('layout/footer');
    }

    public function add_client()
    {
        if ($_POST) 
        {            
            $this->form_validation->set_rules('nombres', 'Nombres', 'required');
            $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
            $this->form_validation->set_rules('no_identificacion', 'Identificacion', 'required');
            $this->form_validation->set_rules('email', 'Correo Electronico', 'required|valid_mail');           
            $this->form_validation->set_rules('tel_fijo', 'Telefono Fijo', 'required|is_numeric');
            $this->form_validation->set_rules('tel_movil', 'Telefono Movil', 'required|is_numeric');
            $this->form_validation->set_rules('direccion', 'Direccion de residencia', 'required');
            $this->form_validation->set_rules('ciudad', 'Ciudad de residencia', 'required');          

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                      </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_client->add_client();
            }
        }

        $this->load->view('layout/header');
        $this->load->view('asesor/admin_clients/add_client');
        $this->load->view('layout/footer');           
    }
    public function list_client($id)
    {
        $data['lstc'] = $this->mod_client->lstClients($id);
        $this->load->view('layout/header');
        $this->load->view('asesor/admin_clients/list_client', $data);
        $this->load->view('layout/footer');
    }
    public function upd_client($id)
    {
        if ($_POST) 
        {            
            $this->form_validation->set_rules('nombres', 'Nombres', 'required');
            $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
            $this->form_validation->set_rules('no_identificacion', 'Identificacion', 'required');
            $this->form_validation->set_rules('email', 'Correo Electronico', 'required|valid_mail');           
            $this->form_validation->set_rules('tel_fijo', 'Telefono Fijo', 'required|is_numeric');
            $this->form_validation->set_rules('tel_movil', 'Telefono Movil', 'required|is_numeric');
            $this->form_validation->set_rules('direccion', 'Direccion de residencia', 'required');
            $this->form_validation->set_rules('ciudad', 'Ciudad de residencia', 'required');          

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                      </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_client->upd_client($id);
            }
        }
        $data['lstc'] = $this->mod_client->lstClients($id);
        $this->load->view('layout/header');
        $this->load->view('asesor/admin_clients/upd_client', $data);
        $this->load->view('layout/footer');           
    }

    public function inact_client($id)
    {
        $this->mod_client->inact_client($id);
    }

    public function act_client($id)
    {
        $this->mod_client->act_client($id);
    }
}