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
        $this->load->model('mod_tema');
        $this->load->model('mod_menu');
        $this->load->model('mod_social');
        $this->load->model('mod_empresa');
        $this->load->model('mod_artist');
        // $this->load->model('mod_tools');
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
            $this->form_validation->set_rules('password', 'Contrasena', 'required');            
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
            $this->form_validation->set_rules('password', 'Contrasena', 'required');            
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
            $this->form_validation->set_rules('precio_alquiler', 'Predcio del alquiler', 'required');
            $this->form_validation->set_rules('direccion_ubicacion', 'Direccion de ubicacion', 'required');
            $this->form_validation->set_rules('total_capacidad', 'Total de capacidad', 'required');
            $this->form_validation->set_rules('categoria_salon', 'Categoria Salon', 'required');
            $this->form_validation->set_rules('nombre_contacto', 'Nombre de contacto', 'required');            
            $this->form_validation->set_rules('tel_contacto', 'Telefono de contacto', 'required|is_numeric');
            $this->form_validation->set_rules('email_contacto', 'Correo de contacto', 'required|valid_mail');
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
            $this->form_validation->set_rules('precio_alquiler', 'Predcio del alquiler', 'required');
            $this->form_validation->set_rules('direccion_ubicacion', 'Direccion de ubicacion', 'required');
            $this->form_validation->set_rules('total_capacidad', 'Total de capacidad', 'required');
            $this->form_validation->set_rules('categoria_salon', 'Categoria Salon', 'required');
            $this->form_validation->set_rules('nombre_contacto', 'Nombre de contacto', 'required');            
            $this->form_validation->set_rules('tel_contacto', 'Telefono de contacto', 'required|is_numeric');
            $this->form_validation->set_rules('email_contacto', 'Correo de contacto', 'required|valid_mail');
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
/*======================================================= DECORACIÓN ==================================================================================================*/
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
            $this->form_validation->set_rules('nombre_decoracion', 'Nombre de decoracion', 'required');
            $this->form_validation->set_rules('categoria_decoracion', 'Categoria Decoracion', 'required');
            $this->form_validation->set_rules('precio_decoracion', 'Predcio de la decoracion', 'required|is_numeric');
            $this->form_validation->set_rules('contacto_decoracion', 'Contacto de decoracion', 'required');        
            $this->form_validation->set_rules('tel_contacto', 'Telefono de contacto', 'required|is_numeric');
            $this->form_validation->set_rules('email_contacto', 'Correo de contacto', 'required');
            $this->form_validation->set_rules('imagen_salon', 'Imagen del salon');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_deco->add_deco();
            }       
        }
        $this->load->view('layout/header');
        $this->load->view('admin/admin_deco/add_deco');
        $this->load->view('layout/footer');
    } 

    public function list_deco($id)
    {
        $data['lstDeco'] = $this->mod_deco->lst_deco($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_deco/list_deco', $data);
        $this->load->view('layout/footer');
    }

    public function upd_deco($id)
    {
        if ($_POST) 
        {
            $this->form_validation->set_rules('nombre_decoracion', 'Nombre de decoracion', 'required');
            $this->form_validation->set_rules('categoria_decoracion', 'Categoria Decoracion', 'required');
            $this->form_validation->set_rules('precio_decoracion', 'Predcio de la decoracion', 'required|is_numeric');
            $this->form_validation->set_rules('contacto_decoracion', 'Contacto de decoracion', 'required');        
            $this->form_validation->set_rules('tel_contacto', 'Telefono de contacto', 'required|is_numeric');
            $this->form_validation->set_rules('email_contacto', 'Correo de contacto', 'required');
            $this->form_validation->set_rules('imagen_salon', 'Imagen del salon');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_deco->upd_deco($id);
            }           
        }

        $data['decoUpd'] = $this->mod_deco->lst_deco($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_deco/upd_deco', $data);
        $this->load->view('layout/footer');
    }

    public function dlt_deco($id)
    {
        $this->mod_deco->dlt_deco($id);
    }
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/

/*=====================================================================================================================================================================*/
/*======================================================= TEMÁTICAS ==================================================================================================*/
/*=====================================================================================================================================================================*/
    public function tematica()
    {
        $id = $this->session->userdata('idUser'); 
        $data['lstu'] = $this->homeadmin->lstUsers($id);
        $data['tema1'] = $this->mod_tema->lstTemaCate1();
        $data['tema2'] = $this->mod_tema->lstTemaCate2();
        $data['tema3'] = $this->mod_tema->lstTemaCate3();
        $this->load->view('layout/header');
        $this->load->view('admin/tematicas', $data);
        $this->load->view('layout/footer');
    }
    public function add_tema()
    {
        if ($_POST) 
        {            
            $this->form_validation->set_rules('nombre_tematica', 'Nombre de la temática', 'required');
            $this->form_validation->set_rules('categoria_tematica', 'Categoria Temática', 'required');
            $this->form_validation->set_rules('precio_tematica', 'Predcio de la temática', 'required|is_numeric');
            $this->form_validation->set_rules('imagen_salon', 'Imagen de la tematica');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_tema->add_tema();
            }       
        }
        $this->load->view('layout/header');
        $this->load->view('admin/admin_tema/add_tema');
        $this->load->view('layout/footer');
    } 

    public function list_tema($id)
    {
        $data['lstTema'] = $this->mod_tema->lst_tema($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_tema/list_tema', $data);
        $this->load->view('layout/footer');
    }

    public function upd_tema($id)
    {
        if ($_POST) 
        {
           $this->form_validation->set_rules('nombre_tematica', 'Nombre de decoracion', 'required');
            $this->form_validation->set_rules('categoria_tematica', 'Categoria Decoracion', 'required');
            $this->form_validation->set_rules('precio_tematica', 'Predcio de la decoracion', 'required|is_numeric');
            $this->form_validation->set_rules('imagen_salon', 'Imagen del salon');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_tema->upd_tema($id);
            }           
        }

        $data['temaUpd'] = $this->mod_tema->lst_tema($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_tema/upd_tema', $data);
        $this->load->view('layout/footer');
    }

    public function dlt_tema($id)
    {
        $this->mod_tema->dlt_tema($id);
    }
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/

/*=====================================================================================================================================================================*/
/*========================================================== MENÚ =====================================================================================================*/
/*=====================================================================================================================================================================*/
    public function menu()
    {
        $id = $this->session->userdata('idUser'); 
        $data['lstu'] = $this->homeadmin->lstUsers($id);
        $data['menu1'] = $this->mod_menu->lstMenuCate1();
        $data['menu2'] = $this->mod_menu->lstMenuCate2();
        $data['menu3'] = $this->mod_menu->lstMenuCate3();
        $this->load->view('layout/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('layout/footer');
    }
    public function add_menu()
    {
        if ($_POST) 
        {            
            $this->form_validation->set_rules('nombre_menu', 'Nombre del menú', 'required');
            $this->form_validation->set_rules('categoria_menu', 'Categoria Menú', 'required');
            $this->form_validation->set_rules('precio_menu', 'Predcio del menú', 'required|is_numeric');
            $this->form_validation->set_rules('coctel', 'Coctel', 'required');
            $this->form_validation->set_rules('pasabocas', 'Pasabocas', 'required');
            $this->form_validation->set_rules('carne', 'Carne', 'required');
            $this->form_validation->set_rules('arroz', 'Arroz', 'required');
            $this->form_validation->set_rules('ensalada', 'Ensalada', 'required');
            $this->form_validation->set_rules('bocado_acompanante', 'Bocado Acompananate', 'required');
            $this->form_validation->set_rules('imagen_menu', 'Imagen del menú');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_menu->add_menu();
            }       
        }
        $this->load->view('layout/header');
        $this->load->view('admin/admin_menu/add_menu');
        $this->load->view('layout/footer');
    } 

    public function list_menu($id)
    {
        $data['lstMenu'] = $this->mod_menu->lst_menu($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_menu/list_menu', $data);
        $this->load->view('layout/footer');
    }

    public function upd_menu($id)
    {
        if ($_POST) 
        {
            $this->form_validation->set_rules('nombre_menu', 'Nombre del menú', 'required');
            $this->form_validation->set_rules('categoria_menu', 'Categoria Menú', 'required');
            $this->form_validation->set_rules('precio_menu', 'Predcio del menú', 'required|is_numeric');
            $this->form_validation->set_rules('coctel', 'Coctel', 'required');
            $this->form_validation->set_rules('pasabocas', 'Pasabocas', 'required');
            $this->form_validation->set_rules('carne', 'Carne', 'required');
            $this->form_validation->set_rules('arroz', 'Arroz', 'required');
            $this->form_validation->set_rules('ensalada', 'Ensalada', 'required');
            $this->form_validation->set_rules('bocado_acompanante', 'Bocado Acompananate', 'required');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_menu->upd_menu($id);
            }           
        }

        $data['menuUpd'] = $this->mod_menu->lst_menu($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_menu/upd_menu', $data);
        $this->load->view('layout/footer');
    }

    public function dlt_menu($id)
    {
        $this->mod_menu->dlt_menu($id);
    }
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/

/*=====================================================================================================================================================================*/
/*========================================================= EVENTOS ===================================================================================================*/
/*=====================================================================================================================================================================*/
    public function evento()
    {
        $id = $this->session->userdata('idUser'); 
        $data['lstu'] = $this->homeadmin->lstUsers($id);
        $data['social'] = $this->mod_social->eventSocial();
        $data['empresa'] = $this->mod_empresa->eventEmpresa();        
        $this->load->view('layout/header');
        $this->load->view('admin/eventos', $data);
        $this->load->view('layout/footer');
    }
    public function add_event()
    {
        if ($_POST) 
        { 
            
            $this->form_validation->set_rules('nombre_evento', 'Nombre del evento', 'required');
            $this->form_validation->set_rules('descripcion', 'Descripción del evento', 'required');
            $this->form_validation->set_rules('tipo_evento', 'Tipo del evento', 'required');
            $this->form_validation->set_rules('imagen_menu', 'Imagen del menú');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');
            $event = $this->input->post('tipo_evento');
            if ($event == "social") 
            {
                if ($this->form_validation->run() == true) 
                {
                    $this->mod_social->add_social();
                } 
            }
            else
            {
                if ($this->form_validation->run() == true) 
                {
                    $this->mod_empresa->add_empresa();
                }
            }     
        }
        $this->load->view('layout/header');
        $this->load->view('admin/admin_events/add_event');
        $this->load->view('layout/footer');
    } 

    public function list_event($id, $tipo_evento)
    {
        if ($tipo_evento == "social") 
        {
            $data['lstEvent'] = $this->mod_social->lst_social($id);
            $data['tipo_evento'] = $tipo_evento;
            $this->load->view('layout/header');
            $this->load->view('admin/admin_events/list_event', $data);
            $this->load->view('layout/footer');
        }
        else
        {
            $data['lstEvent'] = $this->mod_empresa->lst_empresa($id);
            $data['tipo_evento'] = $tipo_evento;
            $this->load->view('layout/header');
            $this->load->view('admin/admin_events/list_event', $data);
            $this->load->view('layout/footer');
        }
    }

    public function upd_event($id, $tipo_evento)
    {
        if ($_POST) 
        {
            $this->form_validation->set_rules('nombre_evento', 'Nombre del evento', 'required');
            $this->form_validation->set_rules('descripcion', 'Descripción del evento', 'required');
            $this->form_validation->set_rules('tipo_evento', 'Tipo del evento', 'required');
            $this->form_validation->set_rules('imagen_menu', 'Imagen del menú');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            $event = $this->input->post('tipo_evento');
            if ($event == "social") 
            {
                if ($this->form_validation->run() == true) 
                {
                    $this->mod_social->upd_social($id);
                } 
            }
            else
            {
                if ($this->form_validation->run() == true) 
                {
                    $this->mod_empresa->upd_empresa($id);
                }
            }         
        }

        // $data['eventUpd'] = $this->mod_event->lst_menu($id);
        // $this->load->view('layout/header');
        // $this->load->view('admin/admin_events/upd_event', $data);
        // $this->load->view('layout/footer');

        if ($tipo_evento == "social") 
        {
            $data['eventUpd'] = $this->mod_social->lst_social($id);
            $data['tipo_evento'] = $tipo_evento;
            $this->load->view('layout/header');
            $this->load->view('admin/admin_events/upd_event', $data);
            $this->load->view('layout/footer');
        }
        else
        {
            $data['eventUpd'] = $this->mod_empresa->lst_empresa($id);
            $data['tipo_evento'] = $tipo_evento;
            $this->load->view('layout/header');
            $this->load->view('admin/admin_events/upd_event', $data);
            $this->load->view('layout/footer');
        }
    }

    public function dlt_event($id)
    {
        if ($tipo_evento == "social") 
        {
            $this->mod_social->dlt_social($id);
        }
        else
        {
            $this->mod_empresa->dlt_empresa($id);
        }
    }
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/

/*=====================================================================================================================================================================*/
/*======================================================== ARTISTAS ===================================================================================================*/
/*=====================================================================================================================================================================*/
    public function artista()
    {
        $id = $this->session->userdata('idUser'); 
        $data['lstu'] = $this->homeadmin->lstUsers($id);
        $data['artista1'] = $this->mod_artist->artCate1();
        $data['artista2'] = $this->mod_artist->artCate2();        
        $data['artista3'] = $this->mod_artist->artCate3();        
        $this->load->view('layout/header');
        $this->load->view('admin/artistas', $data);
        $this->load->view('layout/footer');
    }
    public function add_artist()
    {
        if ($_POST) 
        { 
            
            $this->form_validation->set_rules('nombre_artista', 'Nombre del artista', 'required');
            $this->form_validation->set_rules('categoria_artista', 'Categoria artista', 'required');
            $this->form_validation->set_rules('precio_contrato', 'Predcio del contrato', 'required|is_numeric');
            $this->form_validation->set_rules('nombre_contacto', 'Nombre del contacto', 'required');
            $this->form_validation->set_rules('tel_contacto', 'Telefono del contacto', 'required|is_numeric');
            $this->form_validation->set_rules('email_contacto', 'Correo de contacto', 'required');
            $this->form_validation->set_rules('lista_canciones', 'Lista de canciones', 'required');
            $this->form_validation->set_rules('tipo_artista', 'Tipo de artista', 'required');            
            $this->form_validation->set_rules('imagen_artista', 'Imagen del artista');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_artist->add_artist();
            }   
        }
        $this->load->view('layout/header');
        $this->load->view('admin/admin_artists/add_artist');
        $this->load->view('layout/footer');
    } 

    public function list_artist($id)
    {
        $data['lstArtist'] = $this->mod_artist->lst_artist($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_artists/list_artist', $data);
        $this->load->view('layout/footer');
    }

    public function upd_artist($id)
    {
        if ($_POST) 
        {
            $this->form_validation->set_rules('nombre_artista', 'Nombre del artista', 'required');
            $this->form_validation->set_rules('categoria_artista', 'Categoria artista', 'required');
            $this->form_validation->set_rules('precio_contrato', 'Predcio del contrato', 'required|is_numeric');
            $this->form_validation->set_rules('nombre_contacto', 'Nombre del contacto', 'required');
            $this->form_validation->set_rules('tel_contacto', 'Telefono del contacto', 'required|is_numeric');
            $this->form_validation->set_rules('email_contacto', 'Correo de contacto', 'required');
            $this->form_validation->set_rules('lista_canciones', 'Lista de canciones', 'required');
            $this->form_validation->set_rules('tipo_artista', 'Tipo de artista', 'required');            
            $this->form_validation->set_rules('imagen_artista', 'Imagen del artista');
            
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
                                                          </div>');

            if ($this->form_validation->run() == true) 
            {
                $this->mod_artist->upd_artist($id);
            }       
        }

        $data['artistUpd'] = $this->mod_social->lst_social($id);
        $this->load->view('layout/header');
        $this->load->view('admin/admin_artists/upd_artist', $data);
        $this->load->view('layout/footer');

    }

    public function dlt_artist($id)
    {
        $this->mod_artist->dlt_artist($id);
    }
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
}