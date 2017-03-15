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
    /*-------------------------------------
    - C a r a c t e r i s t i c a s  P r o d u c t o
    -------------------------------------*/
    public function view_caracteristicas(){
        $id   = $_POST['id_cat'];
        $tipo = $_POST['tipo'];

        if($tipo == 'deco'){
            $this->mod_deco->caracteristicas($id);
        }
        if($tipo == 'room'){
            $this->mod_rooms->caracteristicas($id);
        }
        if($tipo == 'tema'){
            $this->mod_tema->caracteristicas($id);
        }
        if($tipo == 'menu'){
            $this->mod_menu->caracteristicas($id);
        }
        if($tipo == 'tools'){
            $this->mod_tools->caracteristicas($id);
        }

    }
    /*-------------------------------------
    - Ultimo registro
    -------------------------------------*/
    public function view_lastid(){
        $this->db->order_by('id_cotizacion', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('cotizacion_evento');
        foreach ($query->result() as $row) {
            echo $row->id_cotizacion;
        }
    }
    /*-------------------------------------
    - guardar cotizacion
    -------------------------------------*/
    public function save_contrato(){
        $id_cotizacion   = $_POST['id_cotizacion'];
        $fecha_evento    = $_POST['fecha_evento'];
        $fecha_registro  = $_POST['fecha_cotizacion'];
        $total           = $_POST['total'];
        $cliente_id      = $_POST['id_cliente'];
        $tipo_evento     = $_POST['tipo_evento'];
        $nombre_evento   = $_POST['nombre_evento'];
        $numero_invitdos = $_POST['numero_invitdos'];

        $this->load->model('mod_cart');
        $this->mod_cart->guardar($id_cotizacion, $fecha_evento, $fecha_registro, $total, $cliente_id, $tipo_evento, $nombre_evento, $numero_invitdos);
    }

    //productos
    public function productos(){
        $cantidad_item       = $_POST['cantidad_item'];
        $caracteristica_item = $_POST['caracteristica_item'];
        $item_id             = $_POST['item_id'];
        $cotizacion_id       = $_POST['cotizacion_id'];
        $comentario_item     = $_POST['comentario_item'];
        $tipo_item           = $_POST['tipo_item'];

        if($this->db->insert('cotizacion_items', array(
                        'cantidad'       => $cantidad_item,
                        'caracteristica' => $caracteristica_item,
                        'item_id'        => $item_id,
                        'cotizacion_id'  => $cotizacion_id,
                        'comentario'     => $comentario_item,
                        'tipo'           => $tipo_item
        )))
        {
            //echo $cantidad_item.'/ '.$caracteristica_item.'/ '.$item_id.'/ '.$cotizacion_id.'/ '.$comentario_item.'/ '.$tipo_item;
            echo 1;
        }
        else{
            echo 0;
            echo $this->db->_error_message();
        }
    }    
    public function pdf($id)    
    {
        $this->load->model('mod_cart');
        $this->load->helper(array('dompdf', 'file'));
        $data['q'] = $this->mod_cart->imp_quote($id);
        $html = $this->load->view('layout/header');
        $html .= $this->load->view('cart/quote', $data, true);
        $html .= $this->load->view('layout/footer');
        //pdf_create($html, "cotizacion");
    }
}