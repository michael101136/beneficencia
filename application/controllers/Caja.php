<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caja extends CI_Controller {/* Mantenimiento de division funcional y grupo funcional*/

	public function __construct(){
      parent::__construct();
     $this->load->model("Alquiler_model");

	}
	public function Header() {
			 // Logo
			 $image_file = K_PATH_IMAGES.'logo_example.jpg';
			 $this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
			 // Set font
			 $this->SetFont('helvetica', 'B', 20);
			 // Title
			 $this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
	 }

	 // Page footer
	 public function Footer() {
			 // Position at 15 mm from bottom
			 $this->SetY(-15);
			 // Set font
			 $this->SetFont('helvetica', 'I', 8);
			 // Page number
			 $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	 }
public function generarcaja() {
        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Israel Parr');
        $pdf->SetTitle('Caja ');
        $pdf->SetSubject('Tutorial TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

				// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE. '', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
        $pdf->setFooterData($tc = array(0, 64, 0), $lc = array(0, 64, 128));


// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//relación utilizada para ajustar la conversión de los píxeles
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


// ---------------------------------------------------------
// establecer el modo de fuente por defecto
        $pdf->setFontSubsetting(true);

// Establecer el tipo de letra

//Si tienes que imprimir carácteres ASCII estándar, puede utilizar las fuentes básicas como
// Helvetica para reducir el tamaño del archivo.
        $pdf->SetFont('freemono', '',8, '', true);

// Añadir una página
// Este método tiene varias opciones, consulta la documentación para más información.
        $pdf->AddPage();

//fijar efecto de sombra en el texto
        $pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 0, 'blend_mode' => 'Normal'));

        $txt_fechaInicio=$this->input->post('txt_fechaInicio');
        $txt_fechafin=$this->input->post('txt_fechafin');
        $caja = $this->Alquiler_model->reportecajamontos($txt_fechaInicio,$txt_fechafin);
        //var_dump(count($caja));exit;
        if(count($caja)>1)
        {
    		$suma=0;

            foreach($caja as $fila)
            {

    						$suma=$suma+($fila->MontoAlquiler);
            }
            $html = '';
            $html .= "<style type=text/css>";
            $html .= "th{color: #000000; font-weight: bold; background-color: #B0C4DE ; border: 1px solid #000000}";
     				$html .= "table{color:2px solid #000000;}";
    				$html .= "td{background-color: #FFFFFF; color: #070707;border: 1px solid #000000}";
            $html .= "</style>";
            $html .= "<h3>Caja ".$txt_fechaInicio." Hasta: ".$txt_fechafin." Total S/. ".$suma."</h3>";
            $html .= "<table width='100%'>";
            $html .= "<thead><tr><th>PASAJE</th><th>CATEGORIA</th><th>CUARTEL</th><th>NICHO</th><th>NIVEL</th><th>DIFUNTO</th><th>RESPONSABLE</th><th>FECHA INICIO</th><th>FECHA FIN</th><th>PRECIO</th></tr></thead>";

            foreach ($caja as $fila)
            {
                $pasajes = $fila->nombrepasaje;
                $categoria = $fila->categoria;
                $nombre_cuartel = $fila->nombre_cuartel;
                $numero_nicho = $fila->numero_nicho;
                $nivel = $fila->nivel;
                $difunto = $fila->nombre;
                $responsable = $fila->responsable;
                $fechaalquiler = $fila->fecha_inicio;
                $fechavenc = $fila->fecha_final;
                $estado = $fila->EstadoA;
                $precio = $fila->MontoAlquiler;
                $html .= "<tr><td class='id'>" .$pasajes. "</td><td class='localidad'>" .$categoria."</td><td class='localidad'>" .$nombre_cuartel."</td><td class='localidad'>" .$numero_nicho."</td><td class='localidad'>" .$nivel."</td><td class='localidad'>" .$difunto."</td><td class='localidad'>" .$responsable."</td><td class='localidad'>" .$fechaalquiler."</td><td class='localidad'>" .$fechavenc."</td><td class='localidad'>" .$precio."</td></tr>";
            }
            $html .= "</table>";
            $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);

            $nombre_archivo = utf8_decode("Caja de".$categoria.".pdf");
            $pdf->Output($nombre_archivo, 'I');
        }else
        {
            $categoria="No exite dato";
            $html = '';
            $html .= "";
            $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);

            $nombre_archivo = utf8_decode("Caja de ".$categoria.".pdf");
            $pdf->Output($nombre_archivo, 'I');
        }
    }

	public function index()
	{
		$this->_load_layout('admin/alquiler/Caja');
    //$this->_load_layout('Front/Administracion/frmFuncion');
	}

	function _load_layout($template)
    {
      $this->load->view('layout/admin/alquiler/header');
      $this->load->view($template);
      $this->load->view('layout/admin/alquiler/footer');
    }

}
