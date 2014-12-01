<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_tema extends CI_model 
{
    //=====================================================================
    //======================== VARIABLES USUARIO ==========================
    var $id_tematica        = '';
    var $nombre_tematica    = '';
    var $precio_tematica    = '';
    var $categoria_tematica = '';
    var $imagen_tematica    = '';
    var $galeria_1          = '';
    var $galeria_2          = '';
    var $galeria_3          = '';
    var $galeria_4          = '';
    var $galeria_5          = '';
    var $upload_i           = '';
    //=====================================================================
    //=====================================================================

    public function __construct(){
        parent::__construct();
        $this->upload_i = './public/images/page/tematicas/';
    }
    
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    public function lstTemaCate1()
    {
        $query = $this->db->get_where('tematicas', array('categoria_tematica' => 1));
        return $query->result();
    }

    public function lstTemaCate2()
    {
        $query = $this->db->get_where('tematicas', array('categoria_tematica' => 2));
        return $query->result();
    }

    public function lstTemaCate3()
    {
        $query = $this->db->get_where('tematicas', array('categoria_tematica' => 3));
        return $query->result();
    }

    public function add_tema()
    {
        $config = array(
            'upload_path'   => $this->upload_i,
            'allowed_types' => 'jpg|png'
        );
        
        // Cargo la libreria upload con su configuracion
        $this->load->library('upload', $config);
        // Subo la imagen con name='imagen'
        $this->upload->do_upload('imagen_tematica');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );

        $this->id_tematica        = $this->input->post('id');
        $this->nombre_tematica    = $this->input->post('nombre_tematica');
        $this->precio_tematica    = $this->input->post('precio_tematica');
        $this->categoria_tematica = $this->input->post('categoria_tematica');
        $this->imagen_tematica    = $config['file_name']; 
        // $this->$this->galeria_1     = $config['file_name']; 
        // $this->$this->galeria_2     = $config['file_name']; 
        // $this->$this->galeria_3     = $config['file_name']; 
        // $this->$this->galeria_4     = $config['file_name'];
        // $this->$this->galeria_5     = $config['file_name'];

        $tematica = array('id_tematica'        => $this->id_tematica,
                          'nombre_tematica'    => $this->nombre_tematica,
                          'precio_tematica'    => $this->precio_tematica,
                          'categoria_tematica' => $this->categoria_tematica, 
                          'imagen_tematica'    => $this->imagen_tematica);

        if (!$this->db->insert('tematicas', $tematica)) 
        {
            //echo mysql_error($query);
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al adicionar la temática!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('La temática se adiciono con exito....!');";
            echo "</script>";
        }
    }

    public function lst_tema($id)
    {
        $query = $this->db->get_where('tematicas', array('id_tematica' => $id));
        return $query->result();
    }

    public function upd_tema($id)
    {
        if ($_FILES['imagen_tematica']['name']){

            $ruta = "../../public/images/page/tematicas/".$_FILES['imagen_tematica']['name'];

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
        $this->upload->do_upload('imagen_tematica');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );
        
        $this->id_tematica        = $this->input->post('id');
        $this->nombre_tematica    = $this->input->post('nombre_tematica');
        $this->precio_tematica    = $this->input->post('precio_tematica');
        $this->categoria_tematica = $this->input->post('categoria_tematica');
        if (isset($ruta2)) 
        {
            $this->imagen_tematica = $ruta2;
        }
        else
        {
            $this->imagen_tematica = $config['file_name'];
        }

        $tematicaUpd = array('id_tematica'        => $this->id_tematica,
                             'nombre_tematica'    => $this->nombre_tematica,
                             'precio_tematica'    => $this->precio_tematica,
                             'categoria_tematica' => $this->categoria_tematica, 
                             'imagen_tematica'    => $this->imagen_tematica);

        $this->db->where('id_tematica', $id);

        if (!$this->db->update('tematicas', $tematicaUpd)) 
        {
           echo "<script type='text/javascript'>";
            echo "alert('Problemas al modificar la temática!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('La temática se modifico con exito....!');";
            echo "</script>";
        }
    }

    public function dlt_tema($id)
    {
        $query = $this->db->get_where('tematicas', array('id_tematica' => $id));
        $ruta = $query->result();
        foreach ($ruta as $key) {
            $rutafinal = $key->imagen_producto;
        }

        unlink("./public/images/page/tematicas".$rutafinal);

        $this->id_tematica = $id;
        $this->db->where('id_tematica', $this->id_tematica);

        if (!$this->db->delete('tematicas')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al eliminar la temática!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('La temática se elimino con exito!');";            
            echo "</script>";
        }
    }
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/      
}