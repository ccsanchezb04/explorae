<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_empresa extends CI_model 
{
    //=====================================================================
    //======================== VARIABLES USUARIO ==========================
    var $id_empresariales   = '';
    var $nombre_evento      = '';
    var $descripcion        = '';
    var $imagen_empresarial = '';
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
        $this->upload_i = './public/images/page/eventos_empresariales/';
    }
    
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    public function eventEmpresa()
    {
        $query = $this->db->get('eventos_empresariales');
        return $query->result();
    }

    

    public function add_empresa()
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

        $this->id_empresariales   = $this->input->post('id');
        $this->nombre_evento = $this->input->post('nombre_evento');
        $this->descripcion   = $this->input->post('descripcion');
        $this->imagen_empresarial = $config['file_name']; 
        // $this->$this->caracteristica_1     = $config['file_name']; 
        // $this->$this->caracteristica_2     = $config['file_name']; 
        // $this->$this->caracteristica_3     = $config['file_name']; 
        // $this->$this->caracteristica_4     = $config['file_name'];
        // $this->$this->caracteristica_5     = $config['file_name'];

        $empresarial = array('id_empresariales'   => $this->id_empresariales,
                             'nombre_evento'      => $this->nombre_evento,
                             'descripcion'        => $this->descripcion,
                             'imagen_empresarial' => $this->imagen_empresarial);

        if (!$this->db->insert('eventos_empresariales', $empresarial)) 
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

    public function lst_empresa($id)
    {
        $query = $this->db->get_where('eventos_empresariales', array('id_empresariales' => $id));
        return $query->result();
    }

    public function upd_empresa($id)
    {
        if ($_FILES['imagen_evento']['name']){

            $ruta = "../../public/images/page/eventos_empresariales/".$_FILES['imagen_evento']['name'];

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
        $this->upload->do_upload('imagen_evento');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );
        
        $this->id_empresariales   = $this->input->post('id');
        $this->nombre_evento = $this->input->post('nombre_evento');
        $this->descripcion   = $this->input->post('descripcion');
        if (isset($ruta2)) 
        {
            $this->imagen_empresarial = $ruta2;
        }
        else
        {
            $this->imagen_empresarial = $config['file_name'];
        }

        $empresarialUpd = array('id_empresariales'   => $this->id_empresariales,
                                'nombre_evento'      => $this->nombre_evento,
                                'descripcion'        => $this->descripcion,
                                'imagen_empresarial' => $this->imagen_empresarial);
    
        $this->db->where('id_empresariales', $id);

        if (!$this->db->update('eventos_empresariales', $empresarialUpd)) 
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

    public function dlt_empresa($id)
    {
        $query = $this->db->get_where('eventos_empresariales', array('id_empresariales' => $id));
        $ruta = $query->result();
        foreach ($ruta as $key) {
            $rutafinal = $key->imagen_empresarial;
        }

        unlink("./public/images/page/eventos_empresariales".$rutafinal);

        $this->id_empresariales = $id;
        $this->db->where('id_empresariales', $this->id_empresariales);

        if (!$this->db->delete('eventos_empresariales')) 
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