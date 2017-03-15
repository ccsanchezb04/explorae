<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_menu extends CI_model 
{
    //=====================================================================
    //======================== VARIABLES USUARIO ==========================
    var $id_menu            = '';
    var $nombre_menu        = '';
    var $precio_menu        = '';
    var $categoria_menu     = '';
    var $coctel             = '';
    var $pasabocas          = '';
    var $carne              = '';
    var $arroz              = '';
    var $ensalada           = '';
    var $bocado_acompanante = '';
    var $imagen_menu        = '';
    var $caracteristica_1          = '';
    var $caracteristica_2          = '';
    var $caracteristica_3          = '';
    var $caracteristica_4          = '';
    var $caracteristica_5          = '';
    var $upload_i           = '';
    //=====================================================================
    //=====================================================================

    public function __construct(){
        parent::__construct();
        $this->upload_i = './public/images/page/menus/';
    }
    
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    public function lstMenuCate1()
    {
        $query = $this->db->get_where('menu', array('categoria_menu' => 1));
        return $query->result();
    }

    public function lstMenuCate2()
    {
        $query = $this->db->get_where('menu', array('categoria_menu' => 2));
        return $query->result();
    }

    public function lstMenuCate3()
    {
        $query = $this->db->get_where('menu', array('categoria_menu' => 3));
        return $query->result();
    }
    public function caracteristicas($id){
        $query = $this->db->get_where('menu', array('id_menu' => $id));
        foreach($query->result() as $datos){
            if ($datos->caracteristica_1 != null || $datos->caracteristica_1 != '' ) {
                 echo '<input type="radio" class="caracteristica" name="caracteristica" value="'.$datos->caracteristica_1.'"><label class="opciones-add-cart" for="">'.$datos->caracteristica_1.'</label><br>';
            }
            if ($datos->caracteristica_2 != null || $datos->caracteristica_2 != '' ) {
                 echo '<input type="radio" class="caracteristica" name="caracteristica" value="'.$datos->caracteristica_2.'"><label class="opciones-add-cart" for="">'.$datos->caracteristica_2.'</label><br>';
            }
            if ($datos->caracteristica_3 != null || $datos->caracteristica_3 != '' ) {
                 echo '<input type="radio" class="caracteristica" name="caracteristica" value="'.$datos->caracteristica_3.'"><label class="opciones-add-cart" for="">'.$datos->caracteristica_3.'</label><br>';
            }
            if ($datos->caracteristica_4 != null || $datos->caracteristica_4 != '' ) {
                 echo '<input type="radio" class="caracteristica" name="caracteristica" value="'.$datos->caracteristica_4.'"><label class="opciones-add-cart" for="">'.$datos->caracteristica_4.'</label><br>';
            }
            if ($datos->caracteristica_5 != null || $datos->caracteristica_5 != '' ) {
                 echo '<input type="radio" class="caracteristica" name="caracteristica" value="'.$datos->caracteristica_5.'"><label class="opciones-add-cart" for="">'.$datos->caracteristica_5.'</label><br>';
            }
            echo '<input type="radio" class="caracteristica" name="caracteristica" value="otro"><label class="opciones-add-cart" for="">Otra caracteristica</label>';
        }
    }


    public function add_menu()
    {
        $config = array(
            'upload_path'   => $this->upload_i,
            'allowed_types' => 'jpg|png'
        );
        
        // Cargo la libreria upload con su configuracion
        $this->load->library('upload', $config);
        // Subo la imagen con name='imagen'
        $this->upload->do_upload('imagen_menu');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );

        $this->id_menu            = $this->input->post('id');
        $this->nombre_menu        = $this->input->post('nombre_menu');
        $this->precio_menu        = $this->input->post('precio_menu');
        $this->categoria_menu     = $this->input->post('categoria_menu');
        $this->coctel             = $this->input->post('coctel');
        $this->pasabocas          = $this->input->post('pasabocas');
        $this->carne              = $this->input->post('carne');
        $this->arroz              = $this->input->post('arroz');
        $this->ensalada           = $this->input->post('ensalada');
        $this->bocado_acompanante = $this->input->post('bocado_acompanante');
        $this->imagen_menu        = $config['file_name']; 
        // $this->$this->caracteristica_1     = $config['file_name']; 
        // $this->$this->caracteristica_2     = $config['file_name']; 
        // $this->$this->caracteristica_3     = $config['file_name']; 
        // $this->$this->caracteristica_4     = $config['file_name'];
        // $this->$this->caracteristica_5     = $config['file_name'];

        $menu = array('id_menu'            => $this->id_menu,
                      'nombre_menu'        => $this->nombre_menu,
                      'precio_menu'        => $this->precio_menu,
                      'categoria_menu'     => $this->categoria_menu,                       
                      'coctel'             => $this->coctel,
                      'pasabocas'          => $this->pasabocas,
                      'carne'              => $this->carne,
                      'arroz'              => $this->arroz,
                      'ensalada'           => $this->ensalada,
                      'bocado_acompanante' => $this->bocado_acompanante,
                      'imagen_menu'        => $this->imagen_menu);

        if (!$this->db->insert('menu', $menu)) 
        {
            //echo mysql_error($query);
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al adicionar el menú!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El menú se adiciono con exito....!');";
            echo "</script>";
        }
    }

    public function lst_menu($id)
    {
        $query = $this->db->get_where('menu', array('id_menu' => $id));
        return $query->result();
    }

    public function upd_menu($id)
    {
        if ($_FILES['imagen_menu']['name']){

            $ruta = "../../public/images/page/menus/".$_FILES['imagen_menu']['name'];

            if (file_exists($_POST['ioriginal']))
            {
                unlink($_POST['ioriginal']);
            }
        }
        else
        {
            $ruta2 = $_POST['ioriginal'];
        }

            
        $config = array(
            'upload_path'   => $this->upload_i,
            'allowed_types' => 'jpg|png'
        );
        
        // Cargo la libreria upload con su configuracion
        $this->load->library('upload', $config);
        // Subo la imagen con name='imagen'
        $this->upload->do_upload('imagen_menu');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );
        
        $this->id_menu            = $this->input->post('id');
        $this->nombre_menu        = $this->input->post('nombre_menu');
        $this->precio_menu        = $this->input->post('precio_menu');
        $this->categoria_menu     = $this->input->post('categoria_menu');
        $this->coctel             = $this->input->post('coctel');
        $this->pasabocas          = $this->input->post('pasabocas');
        $this->carne              = $this->input->post('carne');
        $this->arroz              = $this->input->post('arroz');
        $this->ensalada           = $this->input->post('ensalada');
        $this->bocado_acompanante = $this->input->post('bocado_acompanante');
        if (isset($ruta2)) 
        {
            $this->imagen_menu = $ruta2;
        }
        else
        {
            $this->imagen_menu = $config['file_name'];
        }

        $menuUpd =array('id_menu'            => $this->id_menu,
                        'nombre_menu'        => $this->nombre_menu,
                        'precio_menu'        => $this->precio_menu,
                        'categoria_menu'     => $this->categoria_menu, 
                        'imagen_menu'        => $this->imagen_menu,
                        'coctel'             => $this->coctel,
                        'pasabocas'          => $this->pasabocas,
                        'carne'              => $this->carne,
                        'arroz'              => $this->arroz,
                        'ensalada'           => $this->ensalada,
                        'bocado_acompanante' => $this->bocado_acompanante);
    
        $this->db->where('id_menu', $id);

        if (!$this->db->update('menu', $menuUpd)) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al modificar el menú!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El menú se modifico con exito....!');";
            echo "</script>";
        }
    }

    public function dlt_menu($id)
    {
        $query = $this->db->get_where('menu', array('id_menu' => $id));
        $ruta = $query->result();
        foreach ($ruta as $key) {
            $rutafinal = $key->imagen_producto;
        }

        unlink("./public/images/page/menu".$rutafinal);

        $this->id_menu = $id;
        $this->db->where('id_menu', $this->id_menu);

        if (!$this->db->delete('menu')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al eliminar el menú!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El menú se elimino con exito!');";            
            echo "</script>";
        }
    }
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/      
}