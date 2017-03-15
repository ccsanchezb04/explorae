<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_cart extends CI_model 
{
    //=====================================================================
    //======================== VARIABLES USUARIO ==========================
    var $id_cotizacion    = '';
    var $fecha_evento     = '';
    var $fecha_registro   = '';
    var $total            = '';
    var $cliente_id       = '';
    var $tipo_evento      = '';
    var $nombre_evento    = '';
    var $numero_invitados = '';
    
    public function guardar($id, $fec_e, $fec_r, $tot, $clie, $tipo, $nom, $inv){
        $this->id_cotizacion    = $id;
        $this->fecha_evento     = $fec_e;
        $this->fecha_registro   = $fec_r;
        $this->total            = $tot;
        $this->cliente_id       = $clie;
        $this->tipo_evento      = $tipo;
        $this->nombre_evento    = $nom;
        $this->numero_invitados = $inv;

        $query = 'INSERT INTO cotizacion_evento (id_cotizacion, fecha_evento, fecha_registro, total, cliente_id, tipo_evento, nombre_evento, numero_invitados) VALUES ("'.$this->id_cotizacion.'", "'.$this->fecha_evento.'", "'.$this->fecha_registro.'", "'.$this->total.'", "'.$this->cliente_id.'", "'.$this->tipo_evento.'", "'.$this->nombre_evento.'", "'.$this->numero_invitados.');';
        if(mysql_query($query)){
            echo "Bien";
        }
        else{
            echo "Mal";
            echo mysql_error();
        }
    }  

    public function imp_quote($id)
    {

        $this->db->from('cotizacion_items');
        $this->db->join('cotizacion_evento', 'cotizacion_items.cotizacion_id = cotizacion_evento.id_cotizacion', 'LEFT');
        $this->db->where("cotizacion_evento.id_cotizacion = ".$id."");

        $query = $this->db->get();
        return $query->result();
    }  
}