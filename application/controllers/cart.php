<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

    /*-------------------------------------
    - C o n s t r u c t
    -------------------------------------*/
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mod_quote');
        // $this->load->model('listar');
        $this->removeCache();
    }
    /*-------------------------------------
    - I n d e x     P e d i d o
    -------------------------------------*/

    public function add_cart($id, $table, $field)
    {
        $data['prod'] = $this->mod_quote->list_prod($id, $table, $field);

    }
}