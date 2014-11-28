<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url', 'form_validation');      
        $this->load->model('homeadmin');
        $this->load->model('mod_rooms');
        $this->load->model('mod_deco');
        $this->upload_i = './public/images/page/salones/';
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

    public function dlt_user($id)
    {
        $this->homeadmin->dlt_user($id);
    }
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/

/*=====================================================================================================================================================================*/
/*======================================================== SALONES ====================================================================================================*/
/*=====================================================================================================================================================================*/
    public function salon()
    {
        $id = $this->session->userdata('idUser'); 
        $data['lstu'] = $this->homeadmin->lstUsers($id);
        $data['lstr'] = $this->mod_rooms->lstRoom();
        $this->load->view('layout/header');
        $this->load->view('admin/salones', $data);
        $this->load->view('layout/footer');
    }
    public function add_room()
    {
        if ($_POST) 
        {            
            $this->form_validation->set_rules('nombre_salon', 'Nombre de salon', 'required');
            $this->form_validation->set_rules('precio_alquiler', 'Predcio del alquiler', 'required|valid_mail');
            $this->form_validation->set_rules('direccion_ubicacion', 'Direccion de ubicacion', 'required');
            $this->form_validation->set_rules('total_capacidad', 'Total de capacidad', 'required');
            $this->form_validation->set_rules('categoria_salon', 'Categoria Salon', 'required');
            $this->form_validation->set_rules('nombre_contacto', 'Nombre de contacto', 'required');            
            $this->form_validation->set_rules('tel_contacto', 'Telefono de contacto', 'required|is_numeric');
            $this->form_validation->set_rules('email_contacto', 'Correo de contacto', 'required');
            $this->form_validation->set_rules('imagen_salon', 'Imagen del salon');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_rooms->add_room();
            }       
        }
        $this->load->view('layout/header');
        $this->load->view('admin/admin_rooms/add_room');
        $this->load->view('layout/footer');
    } 

    public function list_room($id)
    {
        $data['lstr'] = $this->mod_rooms->lst_room($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_rooms/list_room', $data);
        $this->load->view('layout/footer');
    }

    public function upd_room($id)
    {
        if ($_POST) 
        {
            $this->form_validation->set_rules('nombre_salon', 'Nombre de salon', 'required');
            $this->form_validation->set_rules('precio_alquiler', 'Predcio del alquiler', 'required|valid_mail');
            $this->form_validation->set_rules('direccion_ubicacion', 'Direccion de ubicacion', 'required');
            $this->form_validation->set_rules('total_capacidad', 'Total de capacidad', 'required');
            $this->form_validation->set_rules('categoria_salon', 'Categoria Salon', 'required');
            $this->form_validation->set_rules('nombre_contacto', 'Nombre de contacto', 'required');            
            $this->form_validation->set_rules('tel_contacto', 'Telefono de contacto', 'required|is_numeric');
            $this->form_validation->set_rules('email_contacto', 'Correo de contacto', 'required');
            $this->form_validation->set_rules('imagen_salon', 'Imagen del salon');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_rooms->upd_room($id);
            }           
        }

        $data['lstr'] = $this->mod_rooms->lst_room($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_rooms/upd_room', $data);
        $this->load->view('layout/footer');
    }

    public function dlt_room($id)
    {
        $this->mod_rooms->dlt_room($id);
    }
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/

/*=====================================================================================================================================================================*/
/*======================================================= DECORACION ==================================================================================================*/
/*=====================================================================================================================================================================*/
    public function decoracion()
    {
        $id = $this->session->userdata('idUser'); 
        $data['lstu'] = $this->homeadmin->lstUsers($id);
        $data['lstdc1'] = $this->mod_deco->lstDecoCate1();
        $data['lstdc2'] = $this->mod_deco->lstDecoCate2();
        $data['lstdc3'] = $this->mod_deco->lstDecoCate3();
        $this->load->view('layout/header');
        $this->load->view('admin/decoraciones', $data);
        $this->load->view('layout/footer');
    }
    public function add_deco()
    {
        if ($_POST) 
        {            
            $this->form_validation->set_rules('nombre_salon', 'Nombre de salon', 'required');
            $this->form_validation->set_rules('precio_alquiler', 'Predcio del alquiler', 'required|valid_mail');
            $this->form_validation->set_rules('direccion_ubicacion', 'Direccion de ubicacion', 'required');
            $this->form_validation->set_rules('total_capacidad', 'Total de capacidad', 'required');
            $this->form_validation->set_rules('categoria_salon', 'Categoria Salon', 'required');
            $this->form_validation->set_rules('nombre_contacto', 'Nombre de contacto', 'required');            
            $this->form_validation->set_rules('tel_contacto', 'Telefono de contacto', 'required|is_numeric');
            $this->form_validation->set_rules('email_contacto', 'Correo de contacto', 'required');
            $this->form_validation->set_rules('imagen_salon', 'Imagen del salon');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_rooms->add_room();
            }       
        }
        $this->load->view('layout/header');
        $this->load->view('admin/admin_deco/add_room');
        $this->load->view('layout/footer');
    } 

    public function list_deco($id)
    {
        $data['lstr'] = $this->mod_rooms->lst_room($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_deco/list_room', $data);
        $this->load->view('layout/footer');
    }

    public function upd_deco($id)
    {
        if ($_POST) 
        {
            $this->form_validation->set_rules('nombre_salon', 'Nombre de salon', 'required');
            $this->form_validation->set_rules('precio_alquiler', 'Predcio del alquiler', 'required|valid_mail');
            $this->form_validation->set_rules('direccion_ubicacion', 'Direccion de ubicacion', 'required');
            $this->form_validation->set_rules('total_capacidad', 'Total de capacidad', 'required');
            $this->form_validation->set_rules('categoria_salon', 'Categoria Salon', 'required');
            $this->form_validation->set_rules('nombre_contacto', 'Nombre de contacto', 'required');            
            $this->form_validation->set_rules('tel_contacto', 'Telefono de contacto', 'required|is_numeric');
            $this->form_validation->set_rules('email_contacto', 'Correo de contacto', 'required');
            $this->form_validation->set_rules('imagen_salon', 'Imagen del salon');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_rooms->upd_room($id);
            }           
        }

        $data['lstr'] = $this->mod_rooms->lst_room($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_rooms/upd_room', $data);
        $this->load->view('layout/footer');
    }

    public function dlt_deco($id)
    {
        $this->mod_rooms->dlt_room($id);
    }
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
}