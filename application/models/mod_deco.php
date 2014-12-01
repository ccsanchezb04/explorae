<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_deco extends CI_model 
{
    //=====================================================================
    //======================== VARIABLES USUARIO ==========================
    var $id_decoracion        = '';
    var $nombre_decoracion    = '';
    var $precio_decoracion    = '';
    var $categoria_decoracion = '';
    var $contacto_decoracion  = '';    
    var $telefono_contacto    = '';
    var $email_contacto       = '';
    var $imagen_decoracion    = '';
    var $galeria_1            = '';
    var $galeria_2            = '';
    var $galeria_3            = '';
    var $galeria_4            = '';
    var $galeria_5            = '';
    var $upload_i             = '';
    //=====================================================================
    //=====================================================================

    public function __construct(){
        parent::__construct();
        $this->upload_i = './public/images/page/decoraciones/';
    }
    
    /*=====================================================================================================================================================================*/
    /*======================================================= USUARIOS ====================================================================================================*/
    /*=====================================================================================================================================================================*/
    public function lstDecoCate1()
    {
        $query = $this->db->get_where('decoraciones', array('categoria_decoracion' => 1));
        return $query->result();
    }

    public function lstDecoCate2()
    {
        $query = $this->db->get_where('decoraciones', array('categoria_decoracion' => 2));
        return $query->result();
    }

    public function lstDecoCate3()
    {
        $query = $this->db->get_where('decoraciones', array('categoria_decoracion' => 3));
        return $query->result();
    }

    public function add_deco()
    {
        $config = array(
            'upload_path'   => $this->upload_i,
            'allowed_types' => 'jpg|png'
        );
        
        // Cargo la libreria upload con su configuracion
        $this->load->library('upload', $config);
        // Subo la imagen con name='imagen'
        $this->upload->do_upload('imagen_decoracion');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );

        $this->id_decoracion        = $this->input->post('id');
        $this->nombre_decoracion    = $this->input->post('nombre_decoracion');
        $this->precio_decoracion    = $this->input->post('precio_decoracion');
        $this->categoria_decoracion = $this->input->post('categoria_decoracion');
        $this->contacto_decoracion  = $this->input->post('contacto_decoracion');
        $this->telefono_contacto    = $this->input->post('tel_contacto');
        $this->email_contacto       = $this->input->post('email_contacto');
        $this->imagen_decoracion    = $config['file_name']; 
        // $this->$this->galeria_1     = $config['file_name']; 
        // $this->$this->galeria_2     = $config['file_name']; 
        // $this->$this->galeria_3     = $config['file_name']; 
        // $this->$this->galeria_4     = $config['file_name'];
        // $this->$this->galeria_5     = $config['file_name'];

        $decoracion = array('id_decoracion'        => $this->id_decoracion,
                            'nombre_decoracion'    => $this->nombre_decoracion,
                            'precio_decoracion'    => $this->precio_decoracion,
                            'categoria_decoracion' => $this->categoria_decoracion, 
                            'contacto_decoracion'  => $this->contacto_decoracion,
                            'telefono_contacto'    => $this->telefono_contacto,
                            'email_contacto'       => $this->email_contacto,
                            'imagen_decoracion'    => $this->imagen_decoracion);

        if (!$this->db->insert('decoraciones', $decoracion)) 
        {
            //echo mysql_error($query);
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Adicionar la decoracion!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('La decoracion se adiciono con exito....!');";
            echo "</script>";
        }
    }

    public function lst_deco($id)
    {
        $query = $this->db->get_where('decoraciones', array('id_decoracion' => $id));
        return $query->result();
    }

    public function upd_deco($id)
    {
        if ($_FILES['imagen_decoracion']['name']){

            $ruta = "../../public/images/page/decoraciones/".$_FILES['imagen_decoracion']['name'];

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
        $this->upload->do_upload('imagen_decoracion');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );
        
        $this->id_decoracion        = $this->input->post('id');
        $this->nombre_decoracion    = $this->input->post('nombre_decoracion');
        $this->precio_decoracion    = $this->input->post('precio_decoracion');
        $this->categoria_decoracion = $this->input->post('categoria_decoracion');
        $this->contacto_decoracion  = $this->input->post('contacto_decoracion');
        $this->telefono_contacto    = $this->input->post('tel_contacto');
        $this->email_contacto       = $this->input->post('email_contacto');
        if (isset($ruta2)) 
        {
            $this->imagen_decoracion = $ruta2;
        }
        else
        {
            $this->imagen_decoracion = $config['file_name'];
        }

        $decoracionUpd = array('id_decoracion'        => $this->id_decoracion,
                               'nombre_decoracion'    => $this->nombre_decoracion,
                               'precio_decoracion'    => $this->precio_decoracion,
                               'categoria_decoracion' => $this->categoria_decoracion, 
                               'contacto_decoracion'  => $this->contacto_decoracion,
                               'telefono_contacto'    => $this->telefono_contacto,
                               'email_contacto'       => $this->email_contacto,
                               'imagen_decoracion'    => $this->imagen_decoracion);

        $this->db->where('id_decoracion', $id);

        if (!$this->db->update('decoraciones', $decoracionUpd)) 
        {
           echo "<script type='text/javascript'>";
            echo "alert('Problemas al modificar el decoracion!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El decoracion se modifico con exito....!');";
            echo "</script>";
        }
    }

    public function dlt_deco($id)
    {
        $query = $this->db->get_where('decoraciones', array('id_decoracion' => $id));
        $ruta = $query->result();
        foreach ($ruta as $key) {
            $rutafinal = $key->imagen_producto;
        }

        unlink("./public/images/page/decoraciones".$rutafinal);

        $this->id_decoracion = $id;
        $this->db->where('id_decoracion', $this->id_decoracion);

        if (!$this->db->delete('decoraciones')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al eliminar la decoracion!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('La decoracion se elimino con exito!');";            
            echo "</script>";
        }
    }
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/      
}