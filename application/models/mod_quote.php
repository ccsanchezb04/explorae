<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_quote extends CI_model 
{
    //=====================================================================
    //======================== VARIABLES USUARIO ==========================
    var $id_equipo         = '';
    var $nombre_equipo     = '';
    var $precio_alquiler   = '';
    var $categoria_equipo  = '';
    var $nombre_contacto   = '';    
    var $telefono_contacto = '';
    var $email_contacto    = '';
    var $detalles          = '';
    var $imagen_equipo     = '';
    var $upload_i          = '';
    //=====================================================================
    //=====================================================================

    public function __construct(){
        parent::__construct();
        $this->upload_i = './public/images/page/equipos/';
    }
    
    /*=====================================================================================================================================================================*/
    /*======================================================= USUARIOS ====================================================================================================*/
    /*=====================================================================================================================================================================*/
    public function lstQuotes()
    {
        $query = $this->db->get('cotizacion_evento');
        return $query->result();
    }

    public function add_tool()
    {
        $config = array(
            'upload_path'   => $this->upload_i,
            'allowed_types' => 'jpg|png'
        );
        
        // Cargo la libreria upload con su configuracion
        $this->load->library('upload', $config);
        // Subo la imagen con name='imagen'
        $this->upload->do_upload('imagen_equipo');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );

        $this->id_equipo         = $this->input->post('id');
        $this->nombre_equipo     = $this->input->post('nombre_equipo');
        $this->precio_alquiler   = $this->input->post('precio_alquiler');
        $this->categoria_equipo  = $this->input->post('categoria_equipo');
        $this->nombre_contacto   = $this->input->post('nombre_contacto');
        $this->telefono_contacto = $this->input->post('tel_contacto');
        $this->email_contacto    = $this->input->post('email_contacto');
        $this->detalles          = $this->input->post('detalles');
        $this->imagen_equipo     = $config['file_name']; 


        $equipo = array('id_equipo'          => $this->id_equipo,
                         'nombre_equipo'     => $this->nombre_equipo,
                         'precio_alquiler'   => $this->precio_alquiler,
                         'categoria_equipo'  => $this->categoria_equipo, 
                         'nombre_contacto'   => $this->nombre_contacto,
                         'telefono_contacto' => $this->telefono_contacto,
                         'email_contacto'    => $this->email_contacto,
                         'detalles'          => $this->detalles,                         
                         'imagen_equipo'     => $this->imagen_equipo);

        if (!$this->db->insert('equipos', $equipo)) 
        {
            //echo mysql_error($query);
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Adicionar la equipo!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('La equipo se adiciono con exito....!');";
            echo "</script>";
        }
    }

    public function lst_tool($id)
    {
        $query = $this->db->get_where('equipos', array('id_equipo' => $id));
        return $query->result();
    }

    public function upd_tool($id)
    {
        if ($_FILES['imagen_equipo']['name']){

            $ruta = "../../public/images/page/equipos/".$_FILES['imagen_equipo']['name'];

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
        $this->upload->do_upload('imagen_equipo');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );
        
        $this->id_equipo         = $this->input->post('id');
        $this->nombre_equipo     = $this->input->post('nombre_equipo');
        $this->precio_alquiler   = $this->input->post('precio_alquiler');
        $this->categoria_equipo  = $this->input->post('categoria_equipo');
        $this->nombre_contacto   = $this->input->post('nombre_contacto');
        $this->telefono_contacto = $this->input->post('tel_contacto');
        $this->email_contacto    = $this->input->post('email_contacto');
        $this->detalles          = $this->input->post('detalles');
        if (isset($ruta2)) 
        {
            $this->imagen_equipo = $ruta2;
        }
        else
        {
            $this->imagen_equipo = $config['file_name'];
        }

        $equipoUpd = array('id_equipo'          => $this->id_equipo,
                            'nombre_equipo'     => $this->nombre_equipo,
                            'precio_alquiler'   => $this->precio_alquiler,
                            'categoria_equipo'  => $this->categoria_equipo, 
                            'nombre_contacto '  => $this->nombre_contacto,
                            'telefono_contacto' => $this->telefono_contacto,
                            'email_contacto'    => $this->email_contacto,
                            'detalles'          => $this->detalles,
                            'imagen_equipo'     => $this->imagen_equipo);

        $this->db->where('id_equipo', $id);

        if (!$this->db->update('equipos', $equipoUpd)) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al modificar el equipo!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El equipo se modifico con exito....!');";
            echo "</script>";
        }
    }

    public function dlt_tool($id)
    {
        $query = $this->db->get_where('equipos', array('id_equipo' => $id));
        $ruta = $query->result();
        foreach ($ruta as $key) {
            $rutafinal = $key->imagen_equipo;
        }

        unlink("./public/images/page/equipos".$rutafinal);

        $this->id_equipo = $id;
        $this->db->where('id_equipo', $this->id_equipo);

        if (!$this->db->delete('equipos')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al eliminar la equipo!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('La equipo se elimino con exito!');";            
            echo "</script>";
        }
    }
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/      
}