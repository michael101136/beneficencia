<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alquiler extends CI_Controller {/* Mantenimiento de division funcional y grupo funcional*/

	public function __construct(){
      parent::__construct();
        $this->load->model("Alquiler_model");
        $this->load->helper("date");
        $this->load->library('mydompdf');

	}

    /* Pagina principal de la vista entidad Y servicio publico asociado */
	public function index()
	{
    $listaDibuntoBaja = $this->Alquiler_model->get_DifuntoBaja();
		$this->load->view('layout/admin/alquiler/header');
		$this->load->view('admin/alquiler/alquiler',["listaDibuntoBaja" => $listaDibuntoBaja]);
		$this->load->view('layout/admin/alquiler/footer');
    //$this->_load_layout('Front/Administracion/frmFuncion');
	}
  //control de pagos actualiza constantemente
  public function ControlAlquiler(){
    if ($this->input->is_ajax_request()) {

      $datos = $this->Alquiler_model->ControlAlquiler();
    }
    else
    {
      show_404();
    }
  }
  //fin para actulizar lospagos
   public function get_nichoDetalleRenovacion(){
    if ($this->input->is_ajax_request()) {
      $id_nicho=$this->input->post('id_nicho');
      $nivel=$this->input->post('nivel');
      $datos = $this->Alquiler_model->get_nichoDetalleRenovacion($id_nicho,$nivel);
      echo json_encode($datos);
    }
    else
    {
      show_404();
    }
  }
  public function AddAlquiler()
  {
    
        $txt_Dni=$this->input->post("txt_Dni");
        $txt_nombreresposable =$this->input->post("txt_nombreresposable");
        $txt_apellidoresponsable =$this->input->post("txt_apellidoresponsable");
        $txt_direccion =$this->input->post("txt_direccion");
        $txt_nombredifunto =$this->input->post("txt_nombredifunto");
        $txt_apellidodifunto =$this->input->post("txt_apellidodifunto");
        $txt_fechaf =$this->input->post("txt_fechaf");
        $cbNicho =$this->input->post("cbNicho");
        $txt_precio =$this->input->post("txt_precio");
        $txt_fechaalquiler =$this->input->post("txt_fechaalquiler");
        $txt_fechafinalquiler =$this->input->post("txt_fechafinalquiler");
        $txt_detallealquiler=$this->input->post("txt_detallealquiler");
        $this->Alquiler_model->AddAlquiler($txt_Dni,$txt_nombreresposable,$txt_apellidoresponsable,$txt_direccion,$txt_nombredifunto,$txt_apellidodifunto,$txt_fechaf,$cbNicho,$txt_precio,$txt_fechaalquiler,$txt_fechafinalquiler,$txt_detallealquiler);
        echo json_encode(['proceso' => 'Correcto', 'mensaje' => 'Dastos registrados  correctamente.']);exit;
  }

	public function ModificarAlquiler(){



				$txt_nombredifuntoModicar=$this->input->post("txt_nombredifuntoModicar");
				$txt_apellidodifuntoModicar=$this->input->post("txt_apellidodifuntoModicar");
				$txt_fechafDifucionModicar=$this->input->post("txt_fechafDifucionModicar");
				$id_difuntoModificar=$this->input->post("id_difuntoModificar");
				$datos = array(
				"nombre" => $txt_nombredifuntoModicar,
				"apellido" => $txt_apellidodifuntoModicar,
				"fecha_fallecimiento" => $txt_fechafDifucionModicar,
				);

				//persona modifcar
				$txt_DniModicar=$this->input->post("txt_DniModicar");
				$txt_nombreresposableModicar=$this->input->post("txt_nombreresposableModicar");
				$txt_apellidoresponsableModicar=$this->input->post("txt_apellidoresponsableModicar");

				$txt_idresponsableModificar=$this->input->post("txt_idresponsableModificar");
				$datas = array(
				"Dni_responsable" => $txt_DniModicar,
				"nombre_responsable" => $txt_nombreresposableModicar,
				"apellido_responsable" => $txt_apellidoresponsableModicar,
				);
				//fecha fin

				//fecha  de alquiler
				$txt_fechaalquilerModicar=$this->input->post("txt_fechaalquilerModicar");
				$txt_fechafinalquilerModicar=$this->input->post("txt_fechafinalquilerModicar");

				$Id_alquileINichoDetalle=$this->input->post("Id_alquileINichoDetalle");
				$datass = array(
				"fecha_inicio" => $txt_fechaalquilerModicar,
				"fecha_final" => $txt_fechafinalquilerModicar,
				);

				$this->Alquiler_model->ActualizarAlquiler($datos,$id_difuntoModificar,$datas,$txt_idresponsableModificar,$datass,$Id_alquileINichoDetalle);
        echo json_encode(['proceso' => 'Correcto', 'mensaje' => 'Datos  actualizo  del proceso de alquiler']);exit;

	}

  public function get_alquiler()
  {

      $datos = $this->Alquiler_model->get_alquiler();
      echo json_encode($datos);
  }

   public function DarBajaAlquiler()//a los nichos
  {
        $id_detallenicho=$this->input->post('txt_nichoDetalle');
         $id_detallenicho2=$this->input->post('txt_nichoDetalle2');
        $datas = array(
          "estado" =>0,
          );
         $datoDetalle = array(
          "Estado_AD" =>1,//Desablitar los disfuntos
          );
      $datos = $this->Alquiler_model->DarBajaAlquiler($datas,$id_detallenicho,$datoDetalle,$id_detallenicho2);
      echo json_encode(['proceso' => 'Correcto', 'mensaje' => 'Dastos registrados  correctamente.']);exit;
  }
  public function updateDeudaNicho()
  {
    if ($this->input->is_ajax_request()) {
      $id_detalleNicho=$this->input->post('id_detalleNicho');
      $datos = $this->Alquiler_model->detalleDeudaAquiler($id_detalleNicho);
      
      
      $fecha=date("d-m", strtotime($datos->fecha_final)); 
      $fechaSistema=(int)(date("Y", strtotime($datos->fechaSistema)))+1; 
      //condicion en caso de ser mayor
      $fechaActRenova=$fechaSistema.'-'.$fecha;
      $precio_renovacion=$datos->precio_renovacion;
      
      $this->Alquiler_model->updateAlquilerDeuda($id_detalleNicho,$fechaActRenova,$precio_renovacion);
      $NichoHistorial = array(
          "id_nicho_detalle" =>$id_detalleNicho,
          "fechaih" =>$fechaActRenova,
          "fechafh" =>$fechaActRenova,
          "montoRenovacion" =>$datos->deuda
          );
      $this->Alquiler_model->insertAlquilerHistorial($NichoHistorial);
      echo json_encode($id_detalleNicho);
    }
    else
    {
      show_404();
    }
  }
  public function RenovacionAlquiler()
  {
    if($this->input->is_ajax_request())
    {
      $id_detalleNichoR=$this->input->post('id_detalleNichoR');
      $txt_fechaFinalA=$this->input->post('txt_fechaFinalA');
      $precioRenovacionA=$this->input->post('precioRenovacionA');
      $txt_aniosAlquiler=$this->input->post('txt_aniosAlquiler');
      $txt_TotalPago=$this->input->post('txt_TotalPago');
      
      $fechaFinalTemp=date("d-m",strtotime($txt_fechaFinalA));
      $anioTemp=date("Y" , strtotime($txt_fechaFinalA));

      $anioTempFinalAlquiler=(int)$anioTemp + (int)$txt_aniosAlquiler;
      $fechaFinalAlquiler=$anioTempFinalAlquiler.'-'.$fechaFinalTemp;

      $tnichoDetalle=array(
        "fecha_inicio" =>$txt_fechaFinalA,
        "fecha_final" =>$fechaFinalAlquiler,
        "EstadoA"  =>'1',
        "CantidadAnio" =>$txt_aniosAlquiler,
        "MontoAlquiler" =>$precioRenovacionA
        );
      $thistorial=array(
        "id_nicho_detalle" =>$id_detalleNichoR,
        "fechaih" =>$txt_fechaFinalA,
        "fechafh" =>$fechaFinalAlquiler,
        "montoRenovacion" =>$precioRenovacionA
      );

      $data=$this->Alquiler_model->RenovacionAlquiler($tnichoDetalle,$id_detalleNichoR,$thistorial);
      echo json_encode($data);exit;

    }else{
      show_404();
    }

  }
  public function get_cuartel()
  {
    if ($this->input->is_ajax_request()) {
      $id_categoria=$this->input->post('categoria');
      $datos = $this->Alquiler_model->get_cuartel($id_categoria);
      echo json_encode($datos);
    // $data=  date("Y-m-d");
     //$fecha10diasdespues = date('Y-m-d',strtotime('+11 days', strtotime($data)));
    }
    else
    {
      show_404();
    }

  }
  public function Get_categoria(){
    if ($this->input->is_ajax_request()) {
      $datos = $this->Alquiler_model->Get_categoria();
      echo json_encode($datos);

    }
    else
    {
      show_404();
    }
  }

  public function get_nicho(){
      if ($this->input->is_ajax_request()) {
      $id_cuartel=$this->input->post('id_cuartel');
      $nivel=$this->input->post('nivel');
      $datos = $this->Alquiler_model->get_nicho($id_cuartel,$nivel);
      echo json_encode($datos);
    }
    else
    {
      show_404();
    }
  }
  public function get_nivel(){
      if ($this->input->is_ajax_request()) {
      $id_cuartel=$this->input->post('id_cuartel');

      $datos = $this->Alquiler_model->get_nivel($id_cuartel);
      echo json_encode($datos);

    }
    else
    {
      show_404();
    }
  }
  public function BoletaAlquiler($iddetalleNicho){

            $data=array(
              'title' => 'Boleta',
              'boleta' => $this->Alquiler_model->BoletaAlquiler($iddetalleNicho)
              );
            $html=$this->load->view('admin/Factura/comprobante', $data, true);
            $this->mydompdf->load_html($html);
            $this->mydompdf->render();
            $this->mydompdf->stream("comprobante.pdf", array("Attachment" => false));   
        
  }

	function _load_layout($template)
    {
      $this->load->view('layout/admin/alquiler/header');
      $this->load->view($template);
      $this->load->view('layout/admin/alquiler/footer');
    }

}
