<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Alquiler_model extends CI_Model {


function get_alquiler(){
	   $alquiler= $this->db->query("call get_alquiler()");
        if ($alquiler->num_rows() >= 0)
        {
            return $alquiler->result();
        } else
        {
            return null;
        }
	}
function get_nichoDetalleRenovacion($id_nicho,$nivel)
{
  $DetalleNombreAlquiler= $this->db->query("select * from tnicho where id_nicho='".$id_nicho."' and nivel='".$nivel."' ");

  return $DetalleNombreAlquiler->result();
}
function get_DifuntoBaja()
	 {
	 	 $DifuntoEliminados= $this->db->query("call get_DifuntoBaja()");
	        if ($DifuntoEliminados->num_rows() >= 0)
	        {
	            return $DifuntoEliminados->result();
	        } else
	        {
	            return null;
	        }
	 }
  function DarBajaAlquiler($datas,$id_detallenicho,$datoDetalle,$id_detallenicho2){

    $this->db->where('id_nicho',$id_detallenicho);
    $this->db->update('tnicho', $datas);
    $this->db->where('id_nicho_detalle',$id_detallenicho2);
    $this->db->update('tnicho_detalle', $datoDetalle);
    if ($this->db->affected_rows() > 0) {
      return true;
    }
    else{
      return false;
    }

  }
  function updateAlquilerDeuda($id_detalleNicho,$fechaActRenova,$precio_renovacion)	
  {
      $this->db->reconnect();
      $this->db->query("call updateAlquilerDeuda_U ('$id_detalleNicho','$fechaActRenova','$precio_renovacion')");
      if ($this->db->affected_rows() > 0)
      {
        return true;
      }
      else
      {
        return false;
      }
  }
   function detalleDeudaAquiler($id_detallenicho){
   	$this->db->reconnect();
    $deuda= $this->db->query("call sp_deuda(".$id_detallenicho.")");
    return $deuda->result()[0];

  }

  function insertAlquilerHistorial($NichoHistorial)
  {
  	$this->db->insert('thistorial',$NichoHistorial);
  	return true;
  }

   function RenovacionAlquiler($tnichoDetalle,$id_detalleNichoR,$thistorial)
  {
    $this->db->where('id_nicho_detalle',$id_detalleNichoR);
    $this->db->update('tnicho_detalle', $tnichoDetalle);


    $this->db->insert('thistorial',$thistorial);

    return true;
  }
function ActualizarAlquiler($datos,$id_difuntoModificar,$datas,$txt_idresponsableModificar,$datass,$Id_alquileINichoDetalle){

		$this->db->where('id_difunto',$id_difuntoModificar);
		$this->db->update('tdifunto', $datos);

		$this->db->where('idresponsable',$txt_idresponsableModificar);
		$this->db->update('tresponsable', $datas);

		$this->db->where('id_nicho_detalle',$Id_alquileINichoDetalle);
		$this->db->update('tnicho_detalle', $datass);
		
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}

}
  function factura(){
     $alquiler= $this->db->query("call sp_factura()");
        if ($alquiler->num_rows() >= 0)
        {
            return $alquiler->result();
        } else
        {
            return null;
        }
  }
function Get_categoria(){
		$this->db->select('id_categoria,categoria');
		$this->db->from('tcategoria');
		$consulta = $this->db->get();
		return $consulta->result();
		}
function get_cuartel($id_categoria){
	    $this->db->select('*');
		$this->db->from('tcuartel');
		$this->db->where('id_categoria',$id_categoria);
		$consulta = $this->db->get();
		return $consulta->result();
		}
function get_nivel($id_cuartel){
	  $nivel= $this->db->query("call sp_niveles(".$id_cuartel.") ");
        if ($nivel->num_rows() > 0)
        {
            return $nivel->result();
        } else
        {
            return false;
        }
     }
function AddAlquiler($txt_Dni,$txt_nombreresposable,$txt_apellidoresponsable,$txt_direccion,$txt_nombredifunto,$txt_apellidodifunto,$txt_fechaf,$cbNicho,$txt_precio,$txt_fechaalquiler,$txt_fechafinalquiler,$txt_detallealquiler)
{
	$id_usuario="41";
	$this->db->query("call sp_alquiler_c ('".$txt_Dni."','".$txt_nombreresposable."','".$txt_apellidoresponsable."','".$txt_direccion."','".$txt_nombredifunto."','".$txt_apellidodifunto."','".$txt_fechaf."','".$id_usuario."','".$cbNicho."','".$txt_fechaalquiler."','".$txt_fechafinalquiler."','".$txt_detallealquiler."','".$txt_precio."') ");
            if ($this->db->affected_rows() > 0)
              {
                return true;
              }
              else
              {
                return false;
              }
}
function get_nicho($id_cuartel,$nivel){
				//$this->db->select('id_nicho,CONCAT("Nivel",nivel,":",numero_nicho) as nicho');
				$nichos= $this->db->query("call sp_nichos(".$id_cuartel.",".$nivel.") ");
			        if ($nichos->num_rows() > 0)
			        {
			            return $nichos->result();
			        } else
			        {
			            return false;
			        }
      }

      //control de pagos
     function ControlAlquiler(){
     $this->db->query("call sp_ControlAlquiler()");
     $this->db->query("call sp_ControlAlquilerRenovar()");

     }

     function reportecajamontos($txt_fechaInicio,$txt_fechafin){
        //$this->db->select('id_nicho,CONCAT("Nivel",nivel,":",numero_nicho) as nicho');
        $cajaMontos= $this->db->query("call sp_reportecaja('".$txt_fechaInicio."','".$txt_fechafin."') ");
              if ($cajaMontos->num_rows() > 0)
              {
                  return $cajaMontos->result();
              } else
              {
                  return false;
              }
      }
      function BoletaAlquiler($iddetalleNicho)
      {
           $boletaAlquiler= $this->db->query("call sp_boletarenovacion('".$iddetalleNicho."') ");
              if ($boletaAlquiler->num_rows() > 0)
              {
                  return $boletaAlquiler->result()[0];
              } else
              {
                  return false;
              }
      }


}
