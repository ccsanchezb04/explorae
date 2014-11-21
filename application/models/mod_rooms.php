<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_rooms extends CI_model 
{
    //=====================================================================
    //======================== VARIABLES USUARIO ==========================
    var $id_salon            = '';
    var $nombre_salon        = '';
    var $precio_alquiler     = '';
    var $direccion_ubicacion = '';
    var $total_capacidad     = '';    
    var $nombre_contacto     = '';
    var $telefono_contacto   = '';
    var $email_contacto      = '';
    var $imagen_salon        = '';
    var $galeria_1           = '';
    var $galeria_2           = '';
    var $galeria_3           = '';
    var $galeria_4           = '';
    var $galeria_5           = '';
    var $upload_i            = '';
    var $upload_galeria      = '';
    //=====================================================================
    //=====================================================================

    public function __construct(){
        parent::__construct();
        $this->upload_i = './public/images/page/salones/';
        $this->upload_galeria = './public/images/gallerys/salones/';
    }
    
    /*=====================================================================================================================================================================*/
    /*======================================================= USUARIOS ====================================================================================================*/
    /*=====================================================================================================================================================================*/
    public function lstRoom()
    {
        $query = $this->db->get('salones');
        return $query->result();
    }

    public function add_room()
    {
        // ===========================================================
        // =============== Imagen de portada produto =================
        $config = array(
            'upload_path'   => $this->upload_i,
            'allowed_types' => 'jpg|png'
        );
        
        // Cargo la libreria upload con su configuracion
        $this->load->library('upload', $config);
        // Subo la imagen con name='imagen'
        $this->upload->do_upload('imagen_salon');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );
        // ===========================================================
        // ===========================================================

        // ===========================================================
        // ================= Imagenes de la galeria ==================
        $galeria = array(
            'upload_path'   => $this->upload_galeria,
            'allowed_types' => 'jpg|png'
        );
        
        // Cargo la libreria upload con su configuracion
        $this->load->library('upload', $galeria);
        // Subo la imagen con name='imagen'
        $this->upload->do_upload('galeria_1');
        $this->upload->do_upload('galeria_2');
        $this->upload->do_upload('galeria_3');
        $this->upload->do_upload('galeria_4');
        $this->upload->do_upload('galeria_5');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $galeria = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );
        // ===========================================================
        // ===========================================================

        $this->id_salon            = $this->input->post('id');
        $this->nombre_salon        = $this->input->post('nombre_salon');
        $this->precio_alquiler     = $this->input->post('precio_alquiler');
        $this->direccion_ubicacion = $this->input->post('direccion_ubicacion');
        $this->total_capacidad     = $this->input->post('total_capacidad');
        $this->categoria_salon     = $this->input->post('categoria_salon');
        $this->nombre_contacto     = $this->input->post('nombre_contacto');
        $this->telefono_contacto   = $this->input->post('tel_contacto');
        $this->email_contacto      = $this->input->post('email_contacto');
        $this->imagen_salon        = $config['file_name'];
        $this->$this->galeria_1    = $galeria['file_name']; 
        $this->$this->galeria_2    = $galeria['file_name']; 
        $this->$this->galeria_3    = $galeria['file_name']; 
        $this->$this->galeria_4    = $galeria['file_name'];
        $this->$this->galeria_5    = $galeria['file_name'];

        $salon = array('id_salon'            => $this->id_salon,
                       'nombre_salon'        => $this->nombre_salon,
                       'precio_alquiler'     => $this->precio_alquiler,
                       'direccion_ubicacion' => $this->direccion_ubicacion,
                       'total_capacidad'     => $this->total_capacidad,
                       'categoria_salon'     => $this->categoria_salon,
                       'nombre_contacto'     => $this->nombre_contacto,
                       'telefono_contacto'   => $this->telefono_contacto,
                       'email_contacto'      => $this->email_contacto,
                       'imagen_salon'        => $this->imagen_salon,
                       'galeria_1'           => $this->galeria_1,
                       'galeria_2'           => $this->galeria_2,
                       'galeria_3'           => $this->galeria_3,
                       'galeria_4'           => $this->galeria_4,
                       'galeria_5'           => $this->galeria_5);

        if (!$this->db->insert('salones', $salon)) 
        {
            //echo mysql_error($query);
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Adicionar el salon!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El salon se adiciono con exito....!');";
            echo "</script>";
        }
    }

    public function lst_room($id)
    {
        $query = $this->db->get_where('salones', array('id_salon' => $id));
        return $query->result();
    }

    public function upd_room($id)
    {
        if ($_FILES['imagen_salon']['name']){

            $ruta = "../../public/images/page/salones/".$_FILES['imagen_salon']['name'];

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
        $this->upload->do_upload('imagen_salon');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );
        
        $this->id_salon            = $this->input->post('id');
        $this->nombre_salon        = $this->input->post('nombre_salon');
        $this->precio_alquiler     = $this->input->post('precio_alquiler');
        $this->direccion_ubicacion = $this->input->post('direccion_ubicacion');
        $this->total_capacidad     = $this->input->post('total_capacidad');
        $this->categoria_salon     = $this->input->post('categoria_salon');
        $this->nombre_contacto     = $this->input->post('nombre_contacto');
        $this->telefono_contacto   = $this->input->post('tel_contacto');
        $this->email_contacto      = $this->input->post('email_contacto');
        if (isset($ruta2)) 
        {
            $this->imagen_salon = $ruta2;
        }
        else
        {
            $this->imagen_salon = $config['file_name'];
        }

        $salonUpd = array('id_salon'            => $this->id_salon,
                          'nombre_salon'        => $this->nombre_salon,
                          'precio_alquiler'     => $this->precio_alquiler,
                          'direccion_ubicacion' => $this->direccion_ubicacion,
                          'total_capacidad'     => $this->total_capacidad,
                          'categoria_salon'     => $this->categoria_salon,
                          'nombre_contacto'     => $this->nombre_contacto,
                          'telefono_contacto'   => $this->telefono_contacto,
                          'email_contacto'      => $this->email_contacto,
                          'imagen_salon'        => $this->imagen_salon);

        $this->db->where('id_salon', $id);

        if (!$this->db->update('salones', $salonUpd)) 
        {
           echo "<script type='text/javascript'>";
            echo "alert('Problemas al modificar el salon!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El salon se modifico con exito....!');";
            echo "</script>";
        }
    }

    public function dlt_room($id)
    {
        $query = $this->db->get_where('salones', array('id_salon' => $id));
        $ruta = $query->result();
        foreach ($ruta as $key) {
            $rutafinal = $key->imagen_producto;
        }

        unlink("./public/images/page/salones".$rutafinal);

        $this->id_salon = $id;
        $this->db->where('id_salon', $this->id_salon);

        if (!$this->db->delete('producto')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al eliminar el salon!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El salon se elimino con exito!');";            
            echo "</script>";
        }
    }
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/      
}