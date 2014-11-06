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
    //=====================================================================
    //=====================================================================

    public function __construct(){
        parent::__construct();
        //$this->upload_i = '../../public/images/page/salones/';
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
        $config = array(
            'upload_path'   => '../../public/images/page/salones/',
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
        $this->nombre_contacto     = $this->input->post('nombre_contacto');
        $this->telefono_contacto   = $this->input->post('tel_contacto');
        $this->email_contacto      = $this->input->post('email_contacto');
        $this->imagen_salon        = $config['file_name'];

        $salon = array('id_salon'            => $this->id_salon,
                       'nombre_salon'        => $this->nombre_salon,
                       'precio_alquiler'     => $this->precio_alquiler,
                       'direccion_ubicacion' => $this->direccion_ubicacion,
                       'total_capacidad'     => $this->total_capacidad,
                       'nombre_contacto'     => $this->nombre_contacto,
                       'telefono_contacto'   => $this->telefono_contacto,
                       'email_contacto'      => $this->email_contacto,
                       'imagen_salon'        => $this->imagen_salon);

        var_dump($salon);
        echo $this;

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
        if ($_FILES['imagen_salon']['name'])        {

            $ruta = "../../public/images/".$_FILES['imagen_salon']['name'];

            if (file_exists($_POST['campo_oculto']))
            {
                unlink($_POST['campo_oculto']);
            }
          //move_uploaded_file($_FILES['imagen_producto']['tmp_name'], $ruta);
        }
        else
        {
            $ruta2 = $_POST['campo_oculto'];
        }

            
        $config = array(
        'upload_path'   => $this->upload_i,
        'allowed_types' => 'jpg|png'
        );
        
        // Cargo la libreria upload con su configuracion
        $this->load->library('upload', $config);
        // Subo la imagen con name='imagen'
        $this->upload->do_upload('imagen_producto');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
        'file_name' => $datos['file_name'],
        'file_path' => $datos['file_path'],
        'full_name' => $datos['full_path']);
        
        $this->codigo_producto       = $this->input->post('codigo_producto');
        $this->nombre_producto       = $this->input->post('nombre_producto');
        if (isset($ruta2)) 
        {
            $this->imagen_producto = $ruta2;
        }
        else
        {
            $this->imagen_producto  = $config['file_name'];
        }
        
        $this->descripcion_producto  = $this->input->post('descripcion_producto');
        $this->categoria             = $this->input->post('categoria');
        $this->precio                = $this->input->post('precio');

        $this->db->where('codigo_producto', $this->codigo_producto);

        if (!$this->db->update('producto', array(
                                'codigo_producto'      =>$this->codigo_producto,
                                'nombre_producto'      =>$this->nombre_producto,
                                'imagen_producto'      =>$this->imagen_producto,
                                'descripcion_producto' =>$this->descripcion_producto,
                                'categoria'            =>$this->categoria,
                                'precio'               =>$this->precio
            ))) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas Al Modificar El Producto!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('Producto Modificado Con Exito!');";
            echo "window.location.replace('".base_url()."index.php/CProductos/indexProd');";
            echo "</script>";
        }
    /*  $this->id_salon            = $this->input->post('id');
        $this->nombre_salon        = $this->input->post('nombre_salon');
        $this->precio_alquiler     = $this->input->post('precio_alquiler');
        $this->direccion_ubicacion = $this->input->post('direccion_ubicacion'); 
        $this->total_capacidad     = $this->input->post('total_capacidad');
        $this->nombre_contacto     = $this->input->post('nombre_contacto');       
        $this->telefono_contacto   = $this->input->post('tel_contacto');
        $this->email_contacto      = $this->input->post('email_contacto');  
        $this->imagen_salon        = $this->input->post('imagen_salon'); 

        $this->db->where('id_salon', $id);

        if (!$this->db->update('salones', $this)) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Modificar el Usuario!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El usuario se modifico con exito....!');";
            echo "</script>";
        }*/
    }

    public function dlt_room($id)
    {
        $this->id_salon = $id;
        $this->db->where('id_salon', $this->id_salon);

        if (!$this->db->delete('salones')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Eliminar el Usuario!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El usuario se elimino con exito....!');";
            echo "window.location.replace('".base_url()."Admin');";
            echo "</script>";
        }
    }
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/      
}