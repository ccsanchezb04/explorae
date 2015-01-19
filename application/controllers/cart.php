<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

    /*-------------------------------------
    - C o n s t r u c t
    -------------------------------------*/
    public function __construct()
    {
        parent::__construct();
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
        // $this->load->model('listar');
        $this->removeCache();
    }
    /*-------------------------------------
    - I n d e x     P e d i d o
    -------------------------------------*/

    public function add_cart()
    {
        $id = $_POST['id'];
        $field = $_POST['field'];

        $this->session->set_userdata(array('idProd' => $id,
                                           'fieldProd' => $field));
        switch ($field) {
            case 'salon':
                $data['prod'] = $this->mod_rooms->lst_room($id);                
                break;

            case 'deco':
                $data['prod'] = $this->mod_deco->list_deco($id);
                break;
            
            default:
                echo "No llegan datos";
                break;
        }
        echo json_encode($data);

        // $this->load->view('layout/header');
        // $this->load->view('cart/view_products', $data);
        // $this->load->view('layout/footer');
    }
}