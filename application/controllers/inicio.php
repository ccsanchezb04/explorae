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
		$this->load->view('salones', $data);
		$this->load->view('layout/content_footer');
		$this->load->view('layout/modals', $data);
		$this->load->view('layout/footer');
	}
}