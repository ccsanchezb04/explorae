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

    public function add_cart($id, $table, $field)
    {
        if ($this->input->is_ajax_request()) {
            $data['prod'] = $this->mod_quote->list_prod($id, $table, $field);
            echo "<script>"
            echo "alert('si llega algo');";
            echo "</script>"
            echo json_encode($data);            
        }
        else
        {
            echo "<script>"
            echo "alert('no llega nada');";
            echo "</script>"
        }
    }
}