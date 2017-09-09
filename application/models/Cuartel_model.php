<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Cuartel_model extends CI_Model {


    
    function get_cuartel(){
    	   $cuartel= $this->db->query("call sp_cuartel_r()");
            if ($cuartel->num_rows() >= 0)
            {
                return $cuartel->result();
            } else
            {
                return null;
            }
    	}
      function get_gantt(){
      	   $cuartel= $this->db->query("call sp_gant_r()");
              if ($cuartel->num_rows() >= 0)
              {
                  return $cuartel->result();
              } else
              {
                  return null;
              }
      	}
    function reportevencidos_Nichos(){
           $nichosV= $this->db->query("call sp_reportevencidos()");

                return $nichosV->result();
        }
        //NICHOS DISPONIBLES
    function reportedisponible_Nichos(){
           $nichosD= $this->db->query("call sp_reportenichosdisponibles()");
            if ($nichosD->num_rows() >= 0)
            {
                return $nichosD->result();
            } else
            {
                return null;
            }
        }
    function Get_pasaje(){
        $this->db->select('*');
        $this->db->from('pasaje');
        $consulta = $this->db->get();
        return $consulta->result();
        }

         function AddCuartel($datas)
         //function AddCuartel($txt_cuartel,$cbxCategoria,$cbxPasaje)
        {
           /* $this->db->query("insert into tcuartel(nombre_cuartel,id_categoria,id_pasaje) values ('$txt_cuartel','$cbxCategoria','$cbxPasaje')");
            if ($this->db->affected_rows()> 0)
              {
                return true;
              }
              else
              {
                return false;
              }*/
              $this->db->insert("tcuartel",$datas);
              return false;
                
        }

        function Get_Categoria()
        {

        	$this->db->select('*');
        	$this->db->from('tcategoria');
        	$consulta = $this->db->get();
        	return $consulta->result();

        }
        function GetIdCuartelParaNombrecuartel($id_cuartel)
        {
        	$nichosD= $this->db->query("select * from tcuartel where id_cuartel='".$id_cuartel."'");
        	return $nichosD->result();
        }

        function NichoIdCuartel($id_cuartel){

        	$listaCuarteId= $this->db->query("SELECT tcuartel.id_cuartel,tcategoria.categoria, pasaje.nombrepasaje,tcuartel.nombre_cuartel,tnicho.numero_nicho,tnicho.nivel,tnicho.precio,tnicho.precio_renovacion FROM tcuartel inner join pasaje on tcuartel.id_pasaje=pasaje.id_pasaje inner join tcategoria on tcuartel.id_categoria=tcategoria.id_categoria INNER join tnicho on tcuartel.id_cuartel=tnicho.id_cuartel WHERE tcuartel.id_cuartel='".$id_cuartel."'");
        	return $listaCuarteId->result();
        }
        function CuartelesPadres($id_cuartel)
        {
        	$listaCuarteIdPadre= $this->db->query("SELECT DISTINCT tnicho.nivel FROM tcuartel inner join pasaje on tcuartel.id_pasaje=pasaje.id_pasaje inner join tcategoria on tcuartel.id_categoria=tcategoria.id_categoria INNER join tnicho on tcuartel.id_cuartel=tnicho.id_cuartel WHERE tcuartel.id_cuartel='".$id_cuartel."' ORDER BY tnicho.nivel ASC");
        	return $listaCuarteIdPadre->result();

        }
         function   NichoIdCuartelNivel($id_cuartel)
        {
          $listaCuarteIdPadre= $this->db->query("SELECT DISTINCT tnicho.nivel FROM tcuartel inner join pasaje on tcuartel.id_pasaje=pasaje.id_pasaje inner join tcategoria on tcuartel.id_categoria=tcategoria.id_categoria INNER join tnicho on tcuartel.id_cuartel=tnicho.id_cuartel WHERE tcuartel.id_cuartel='".$id_cuartel."' ORDER BY tnicho.nivel ASC");
          return $listaCuarteIdPadre->result();

        }
        function nombreCuartel($id_cuartel)
        {

         $listaCuarteIdPadre= $this->db->query("SELECT tcuartel.id_cuartel,tcuartel.nombre_cuartel FROM tcuartel  WHERE tcuartel.id_cuartel='".$id_cuartel."'");
        return $listaCuarteIdPadre->result();
        }

        function cuartel($id_cuartel)
	    {
	        $cuartel=$this->db->query("select * from tcuartel where id_cuartel='".$id_cuartel."'");

	        return $cuartel->result();
	    }
        function editar($id_cuartel,$txt_cuartel)
   		{
        $data=$this->db->query("update tcuartel set  nombre_cuartel='".$txt_cuartel."' where id_cuartel='".$id_cuartel."'");

        return true;
    	}



}
