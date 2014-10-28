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
        $id = $this->session->userdata('idUser'); 
        $data['lstu'] = $this->homeadmin->lstUsers($id);
        $data['lsta'] = $this->homeadmin->lstAdmin();
        $data['lsts'] = $this->homeadmin->lstAsesor();
        $data['lstc'] = $this->homeadmin->lstCliente();
        $this->load->view('layout/header');
        $this->load->view('admin/admin', $data);
        $this->load->view('layout/footer');
    }

    public function add_user()
    {
        if ($_POST) 
        {            
            $this->form_validation->set_rules('nombres', 'Nombres', 'required');
            $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
            $this->form_validation->set_rules('no_identificacion', 'Identificacion', 'required');
            $this->form_validation->set_rules('email', 'Correo Electronico', 'required|valid_mail');
            $this->form_validation->set_rules('password', 'Contraseña', 'required');            
            $this->form_validation->set_rules('tel_fijo', 'Telefono Fijo', 'required|is_numeric');
            $this->form_validation->set_rules('tel_movil', 'Telefono Movil', 'required|is_numeric');
            $this->form_validation->set_rules('direccion', 'Direccion de residencia', 'required');
            $this->form_validation->set_rules('ciudad', 'Ciudad de residencia', 'required');          
            $this->form_validation->set_rules('tipo_usuario', 'Tipo de usuario', 'required');            

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->homeadmin->add_user();
            }       
        }
        $id = $this->session->userdata('idUser'); 
        $data['lstu'] = $this->homeadmin->lstUsers($id);
        $data['lsta'] = $this->homeadmin->lstAdmin();
        $data['lsts'] = $this->homeadmin->lstAsesor();
        $data['lstc'] = $this->homeadmin->lstCliente();
        $this->load->view('layout/header');
        $this->load->view('admin/admin_users/add_users');
        $this->load->view('layout/footer');
    } 

    public function list_user($id)
    {
        $data['lstu'] = $this->homeadmin->lstUsers($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_users/list_user', $data);
        $this->load->view('layout/footer');
    }

    public function upd_user($id)
    {
        if ($_POST) 
        {
            $this->form_validation->set_rules('nombres', 'Nombres', 'required');
            $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
            $this->form_validation->set_rules('no_identificacion', 'Identificacion', 'required');
            $this->form_validation->set_rules('email', 'Correo Electronico', 'required|valid_mail');
            $this->form_validation->set_rules('password', 'Contraseña', 'required');            
            $this->form_validation->set_rules('tel_fijo', 'Telefono Fijo', 'required|is_numeric');
            $this->form_validation->set_rules('tel_movil', 'Telefono Movil', 'required|is_numeric');
            $this->form_validation->set_rules('direccion', 'Direccion de residencia', 'required');
            $this->form_validation->set_rules('ciudad', 'Ciudad de residencia', 'required');            
            $this->form_validation->set_rules('tipo_usuario', 'Tipo de usuario', 'required'); 
            $this->form_validation->set_rules('estado', 'Estado', 'required'); 

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->homeadmin->upd_user($id);
            }           
        }

        $data['lstu'] = $this->homeadmin->lstUsers($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_users/upd_user', $data);
        $this->load->view('layout/footer');
    }

    public function inact_user($id)
    {
        $this->homeadmin->inact_user($id);
    }

    public function act_user($id)
    {
        $this->homeadmin->act_user($id);
    }

/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
}