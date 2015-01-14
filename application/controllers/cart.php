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

    public function add_cart($id, $field)
    {
        if (!$this->input->is_ajax_request()) 
        {
            echo "<script>"
            echo "alert('no llega nada');";
            echo "</script>"            
        }
        else
        {
            switch ($field) {
                case 'salon':
                    $data['prod'] = $this->mod_rooms->list_room($id);
                    json_encode($data);
                    break;

                case 'deco':
                    $data['prod'] = $this->mod_deco->list_deco($id);
                    break;
                
                default:
                    echo "string";
                    break;
            }
        }
    }
}