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
}