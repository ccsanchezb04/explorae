<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_social extends CI_model 
{
    //=====================================================================
    //======================== VARIABLES USUARIO ==========================
    var $id_sociales   = '';
    var $nombre_evento = '';
    var $descripcion   = '';
    var $imagen_social = '';
    var $galeria_1     = '';
    var $galeria_2     = '';
    var $galeria_3     = '';
    var $galeria_4     = '';
    var $galeria_5     = '';
    var $upload_i      = '';
    //=====================================================================
    //=====================================================================

    public function __construct(){
        parent::__construct();
        $this->upload_i = './public/images/page/eventos_sociales/';
    }
    
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    public function eventSocial()
    {
        $query = $this->db->get('eventos_sociales');
        return $query->result();
    }

    

    public function add_social()
    {
        $config = array(
            'upload_path'   => $this->upload_i,
            'allowed_types' => 'jpg|png'
        );
        
        // Cargo la libreria upload con su configuracion
        $this->load->library('upload', $config);
        // Subo la imagen con name='imagen'
        $this->upload->do_upload('imagen_evento');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );

        $this->id_sociales   = $this->input->post('id');
        $this->nombre_evento = $this->input->post('nombre_evento');
        $this->descripcion   = $this->input->post('descripcion');
        $this->imagen_social = $config['file_name']; 
        // $this->$this->galeria_1     = $config['file_name']; 
        // $this->$this->galeria_2     = $config['file_name']; 
        // $this->$this->galeria_3     = $config['file_name']; 
        // $this->$this->galeria_4     = $config['file_name'];
        // $this->$this->galeria_5     = $config['file_name'];

        $social = array('id_sociales'   => $this->id_sociales,
                        'nombre_evento' => $this->nombre_evento,
                        'descripcion'   => $this->descripcion,
                        'imagen_social' => $this->imagen_social);

        if (!$this->db->insert('eventos_sociales', $social)) 
        {
            //echo mysql_error($query);
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al adicionar el evento!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El evento se adiciono con exito....!');";
            echo "</script>";
        }
    }

    public function lst_social($id)
    {
        $query = $this->db->get_where('eventos_sociales', array('id_sociales' => $id));
        return $query->result();
    }

    public function upd_social($id)
    {
        if ($_FILES['imagen_evento']['name'])
        {
            $ruta = "../../public/images/page/eventos_sociales/".$_FILES['imagen_evento']['name'];

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
        $this->upload->do_upload('imagen_social');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );
        
        $this->id_sociales   = $this->input->post('id');
        $this->nombre_evento = $this->input->post('nombre_evento');
        $this->descripcion   = $this->input->post('descripcion');
        if (isset($ruta2)) 
        {
            $this->imagen_social = $ruta2;
        }
        else
        {
            $this->imagen_social = $config['file_name'];
        }

        $socialUpd = array('id_sociales'   => $this->id_sociales,
                           'nombre_evento' => $this->nombre_evento,
                           'descripcion'   => $this->descripcion,
                           'imagen_social' => $this->imagen_social);
    
        $this->db->where('id_sociales', $id);

        if (!$this->db->update('eventos_sociales', $socialUpd)) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al modificar el evento!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El evento se modifico con exito....!');";
            echo "</script>";
        }
    }

    public function dlt_social($id)
    {
        $query = $this->db->get_where('eventos_sociales', array('id_sociales' => $id));
        $ruta = $query->result();
        foreach ($ruta as $key) {
            $rutafinal = $key->imagen_social;
        }

        unlink("./public/images/page/eventos_sociales".$rutafinal);

        $this->id_sociales = $id;
        $this->db->where('id_sociales', $this->id_sociales);

        if (!$this->db->delete('eventos_sociales')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al eliminar el evento!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El evento se elimino con exito!');";            
            echo "</script>";
        }
    }
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/      
}