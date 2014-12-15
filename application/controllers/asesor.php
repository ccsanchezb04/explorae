<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asesor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();   
        $this->load->model('homeadmin');
        /*$this->removeCache();*/
    }

    public function asesor_admin()
    {
        $id = $this->session->userdata('idUser'); 
        $data['lstc'] = $this->homeadmin->lstCliente();
        $this->load->view('layout/header');
        $this->load->view('asesor/admin', $data);
        $this->load->view('layout/footer');
    }
}