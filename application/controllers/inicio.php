<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Index');
		$this->load->model('homeadmin');
        $this->load->model('mod_client');
        $this->load->model('mod_rooms');
        $this->load->model('mod_deco');
        $this->load->model('mod_tema');
        $this->load->model('mod_menu');
        $this->load->model('mod_social');
        $this->load->model('mod_empresa');
        $this->load->model('mod_artist');
        $this->load->model('mod_tools');
		// $this->removeCache();

		/*if (!$this->session->userdata('roleUser')) 
		{
			redirect('login', 'refresh');
		}*/
	}

	public function index()
	{
		$data['res'] = $this->Index->mostrar();		   
		$this->load->view('layout/header');		
		$this->load->view('index', $data);		
		$this->load->view('layout/content_footer');
		$this->load->view('layout/modals', $data);
		$this->load->view('layout/footer');
	}

	public function salones()
	{
		$data['room1'] = $this->mod_rooms->roomCate1();
		$data['room2'] = $this->mod_rooms->roomCate2();
		$data['room3'] = $this->mod_rooms->roomCate3();
		$this->load->view('layout/header');
		$this->load->view('pagina/salones', $data);
		$this->load->view('layout/content_footer');
		$this->load->view('layout/modals', $data);
		$this->load->view('layout/footer');
	}

    public function decoraciones()
    {
        $data['deco1'] = $this->mod_deco->lstDecoCate1();
        $data['deco2'] = $this->mod_deco->lstDecoCate2();
        $data['deco3'] = $this->mod_deco->lstDecoCate3();
        $this->load->view('layout/header');
        $this->load->view('pagina/decoraciones', $data);
        $this->load->view('layout/content_footer');
        $this->load->view('layout/modals', $data);
        $this->load->view('layout/footer');
    }

    public function tematicas()
    {
        $data['tema1'] = $this->mod_tema->lstTemaCate1();
        $data['tema2'] = $this->mod_tema->lstTemaCate2();
        $data['tema3'] = $this->mod_tema->lstTemaCate3();
        $this->load->view('layout/header');
        $this->load->view('pagina/tematicas', $data);
        $this->load->view('layout/content_footer');
        $this->load->view('layout/modals', $data);
        $this->load->view('layout/footer');
    }

    public function menu()
    {
        $data['menu1'] = $this->mod_menu->lstMenuCate1();
        $data['menu2'] = $this->mod_menu->lstMenuCate2();
        $data['menu3'] = $this->mod_menu->lstMenuCate3();
        $this->load->view('layout/header');
        $this->load->view('pagina/menu', $data);
        $this->load->view('layout/content_footer');
        $this->load->view('layout/modals', $data);
        $this->load->view('layout/footer');
    }

    public function sociales()
    {
        $data['social'] = $this->mod_social->eventSocial();
        $this->load->view('layout/header');
        $this->load->view('pagina/sociales', $data);
        $this->load->view('layout/content_footer');
        $this->load->view('layout/modals', $data);
        $this->load->view('layout/footer');
    }

    public function empresariales()
    {
        $data['empresarial'] = $this->mod_empresa->eventEmpresa();
        $this->load->view('layout/header');
        $this->load->view('pagina/empresariales', $data);
        $this->load->view('layout/content_footer');
        $this->load->view('layout/modals', $data);
        $this->load->view('layout/footer');
    }

    public function artistas()
    {
        $data['artist1'] = $this->mod_artist->artCate1();
        $data['artist2'] = $this->mod_artist->artCate2();
        $data['artist3'] = $this->mod_artist->artCate3();
        $this->load->view('layout/header');
        $this->load->view('pagina/artistas', $data);
        $this->load->view('layout/content_footer');
        $this->load->view('layout/modals', $data);
        $this->load->view('layout/footer');
    }

    public function equipos()
    {
        $data['equipo1'] = $this->mod_tools->toolCate1();
        $data['equipo2'] = $this->mod_tools->toolCate2();
        $data['equipo3'] = $this->mod_tools->toolCate3();
        $this->load->view('layout/header');
        $this->load->view('pagina/equipos', $data);
        $this->load->view('layout/content_footer');
        $this->load->view('layout/modals', $data);
        $this->load->view('layout/footer');
    }
}