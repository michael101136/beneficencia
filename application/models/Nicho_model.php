<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Nicho_model extends CI_Model {


    function get_nicho(){
    	   $nicho= $this->db->query("call sp_nichos_r()");
            if ($nicho->num_rows() >= 0) 
            {
                return $nicho->result();
            } else 
            {
                return null;
            }
    	}
        function Get_Precio($id_cuartel,$nivel)  
        {
            $nichoPrecio= $this->db->query("select tnicho.precio from  tnicho inner join tcuartel on 
                                    tcuartel.id_cuartel=tnicho.id_cuartel WHERE tcuartel.id_cuartel='".$id_cuartel."' and tnicho.nivel='".$nivel."'");
            return $nichoPrecio->result();
       
        }
        function AddNichos($datas)
        {

              $this->db->insert("tnicho",$datas);
                return true;

        }
        function updatePrecios($txt_IdCuartel,$combo_Nivel,$txt_nivel_Precios,$precio_renovacion)
        {

             $this->db->query("call sp_actualizarprecios('".$txt_IdCuartel."','".$combo_Nivel."','".$txt_nivel_Precios."','".$precio_renovacion."')");
             return true;

        }

        function nichos($id_nicho)
        {
            $nicho=$this->db->query("select * from tnicho where id_nicho='".$id_nicho."'");

            return $nicho->result();
        }
        function editar($id_nicho,$txt_numero_nicho,$txt_nivel,$txt_precio_alquiler,$txt_precio_renovacion)
        {
        $data=$this->db->query("update tnicho set  txt_numero_nicho='".$txt_numero_nicho."', txt_nivel='".$txt_nivel."', txt_precio_alquiler='".$txt_precio_alquiler."',txt_precio_renovacion='".$txt_precio_renovacion."'  where id_nicho='".$id_nicho."'");

        return true;
        }
    

}