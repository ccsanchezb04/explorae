<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url', 'form_validation');      
        $this->load->model('homeadmin');
        /*$this->removeCache();*/
    }

/*=====================================================================================================================================================================*/
/*======================================================= USUARIOS ====================================================================================================*/
/*=====================================================================================================================================================================*/

    public function index() 
    {
        $data['lsta'] = $this->homeadmin->lstAdmin();
        $data['lsts'] = $this->homeadmin->lstAsesor();
        $data['lstc'] = $this->homeadmin->lstCliente();
        $this->load->view('layout/header');
        $this->load->view('admin/admin', $data);
        $this->load->view('layout/footer');
    }
    
}