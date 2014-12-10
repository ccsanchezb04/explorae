<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_artist extends CI_model 
{
    //=====================================================================
    //======================== VARIABLES USUARIO ==========================
    var $id_artista        = '';
    var $nombre_artista    = '';
    var $precio_artista    = '';
    var $categoria_artista = '';
    var $contacto_artista  = '';    
    var $telefono_contacto = '';
    var $email_contacto    = '';
    var $lista_canciones   = '';
    var $tipo_artista      = '';
    var $imagen_artista    = '';
    var $upload_i          = '';
    //=====================================================================
    //=====================================================================

    public function __construct(){
        parent::__construct();
        $this->upload_i = './public/images/page/artistas/';
    }
    
    /*=====================================================================================================================================================================*/
    /*======================================================= USUARIOS ====================================================================================================*/
    /*=====================================================================================================================================================================*/
    public function artCate1()
    {
        $query = $this->db->get_where('artistas', array('categoria_artista' => 1));
        return $query->result();
    }

    public function artCate2()
    {
        $query = $this->db->get_where('artistas', array('categoria_artista' => 2));
        return $query->result();
    }

    public function artCate3()
    {
        $query = $this->db->get_where('artistas', array('categoria_artista' => 3));
        return $query->result();
    }

    public function artSolista()
    {
        $query = $this->db->get_where('artistas', array('tipo_artista' => 'solista'));
        return $query->result();
    }

    public function artGrupo()
    {
        $query = $this->db->get_where('artistas', array('tipo_artista' => 'grupo'));
        return $query->result();
    }

    public function add_artist()
    {
        $config = array(
            'upload_path'   => $this->upload_i,
            'allowed_types' => 'jpg|png'
        );
        
        // Cargo la libreria upload con su configuracion
        $this->load->library('upload', $config);
        // Subo la imagen con name='imagen'
        $this->upload->do_upload('imagen_artista');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );

        $this->id_artista        = $this->input->post('id');
        $this->nombre_artista    = $this->input->post('nombre_artista');
        $this->precio_artista    = $this->input->post('precio_artista');
        $this->categoria_artista = $this->input->post('categoria_artista');
        $this->contacto_artista  = $this->input->post('contacto_artista');
        $this->telefono_contacto = $this->input->post('tel_contacto');
        $this->email_contacto    = $this->input->post('email_contacto');
        $this->lista_canciones   = $this->input->post('lista_canciones');
        $this->tipo_artista      = $this->input->post('tipo_artista');
        $this->imagen_artista    = $config['file_name']; 


        $artista = array('id_artista'         => $this->id_artista,
                          'nombre_artista'    => $this->nombre_artista,
                          'precio_artista'    => $this->precio_artista,
                          'categoria_artista' => $this->categoria_artista, 
                          'contacto_artista'  => $this->contacto_artista,
                          'telefono_contacto' => $this->telefono_contacto,
                          'email_contacto'    => $this->email_contacto,
                          'lista_canciones'   => $this->lista_canciones,
                          'tipo_artista'      => $this->tipo_artista,
                          'imagen_artista'    => $this->imagen_artista);

        if (!$this->db->insert('artistas', $artista)) 
        {
            //echo mysql_error($query);
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al Adicionar la artista!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('La artista se adiciono con exito....!');";
            echo "</script>";
        }
    }

    public function lst_artist($id)
    {
        $query = $this->db->get_where('artistas', array('id_artista' => $id));
        return $query->result();
    }

    public function upd_artist($id)
    {
        if ($_FILES['imagen_artista']['name']){

            $ruta = "../../public/images/page/artistas/".$_FILES['imagen_artista']['name'];

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
        $this->upload->do_upload('imagen_artista');
        
        // Datos del Archivo Subido
        $datos = $this->upload->data();
        $config = array(
            'file_name' => $datos['file_name'],
            'file_path' => $datos['file_path'],
            'full_name' => $datos['full_path']
        );
        
        $this->id_artista        = $this->input->post('id');
        $this->nombre_artista    = $this->input->post('nombre_artista');
        $this->precio_artista    = $this->input->post('precio_artista');
        $this->categoria_artista = $this->input->post('categoria_artista');
        $this->contacto_artista  = $this->input->post('contacto_artista');
        $this->telefono_contacto = $this->input->post('tel_contacto');
        $this->email_contacto    = $this->input->post('email_contacto');
        $this->lista_canciones   = $this->input->post('lista_canciones');
        $this->tipo_artista      = $this->input->post('tipo_artista');
        if (isset($ruta2)) 
        {
            $this->imagen_artista = $ruta2;
        }
        else
        {
            $this->imagen_artista = $config['file_name'];
        }

        $artistaUpd = array('id_artista'        => $this->id_artista,
                            'nombre_artista'    => $this->nombre_artista,
                            'precio_artista'    => $this->precio_artista,
                            'categoria_artista' => $this->categoria_artista, 
                            'contacto_artista'  => $this->contacto_artista,
                            'telefono_contacto' => $this->telefono_contacto,
                            'email_contacto'    => $this->email_contacto,
                            'lista_canciones'   => $this->lista_canciones,
                            'tipo_artista'      => $this->tipo_artista,
                            'imagen_artista'    => $this->imagen_artista);

        $this->db->where('id_artista', $id);

        if (!$this->db->update('artistas', $artistaUpd)) 
        {
           echo "<script type='text/javascript'>";
            echo "alert('Problemas al modificar el artista!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('El artista se modifico con exito....!');";
            echo "</script>";
        }
    }

    public function dlt_artist($id)
    {
        $query = $this->db->get_where('artistas', array('id_artista' => $id));
        $ruta = $query->result();
        foreach ($ruta as $key) {
            $rutafinal = $key->imagen_producto;
        }

        unlink("./public/images/page/artistas".$rutafinal);

        $this->id_artista = $id;
        $this->db->where('id_artista', $this->id_artista);

        if (!$this->db->delete('artistas')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Problemas al eliminar la artista!');";
            echo "</script>";
        }
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('La artista se elimino con exito!');";            
            echo "</script>";
        }
    }
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/
    /*=====================================================================================================================================================================*/      
}