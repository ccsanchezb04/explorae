<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Index');
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
}