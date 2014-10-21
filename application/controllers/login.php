<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('index');
        // $this->removeCache();
    }

    public function index()
    {
        switch ($this->session->userdata('roleUser')) 
        {
            case 'admin':
                redirect(base_url().'Admin', 'refresh');
                break;
            
            default:
                $this->form_validation->set_rules('id', 'No. de Identificacion', 'required');
                $this->form_validation->set_rules('password', 'Contraseña', 'required');

                $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                              </div>');

                if ($this->form_validation->run() == true) 
                {
                    $this->index->validateUser();
                }
                break;
        }
        $this->load->view('layout/header');
        $this->load->view('index');
        $this->load->view('layout/content_footer');
        $this->load->view('layout/modals');
        $this->load->view('layout/footer');
    }

    public function close()
    {
        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');
    }
}