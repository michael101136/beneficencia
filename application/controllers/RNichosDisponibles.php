<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class RNichosDisponibles extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Cuartel_model');
    }

   /* public function index()
    {
        //$data['provincias'] llena el select con las provincias españolas
        $data['provincias'] = $this->Cuartel_model->reportedisponible_Nichos();
        //cargamos la vista y pasamos el array $data['provincias'] para su uso
        $this->load->view('pdfs_view', $data);
    }*/

    public function generar() {
        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Beneficenia Publica De abancay');
        $pdf->SetTitle('Nichos disponibles');
        $pdf->SetSubject('Tutorial TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
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
        $pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));

// Establecemos el contenido para imprimir
      ini_set('memory_limit', '8192M');
        $nichosD = $this->Cuartel_model->reportedisponible_Nichos();
        foreach($nichosD as $fila)
        {
            $pasaje = $fila->nombrepasaje;
        }
        //preparamos y maquetamos el contenido a crear
        $html = '';
        $html .= "<style type=text/css>";
        $html .= "th{color: #000000; font-weight: bold; background-color: #B0C4DE ; border: 1px solid #000000}";
        $html .= "table{color:2px solid #000000;}";
        $html .= "td{background-color: #FFFFFF; color: #070707;border: 1px solid #000000}";
        $html .= "</style>";
        $html .= "<h2>CUARTELES ".$pasaje."</h2><h4>Actualmente: ".$pasaje." PASAJES</h4>";
        $html .= "<table width='100%'>";
        $html .= "<thead><tr><th>PASAJE</th><th>CATEGORIA</th><th>CUARTEL</th><th>NUMERO DE NICHO</th><th>NIVEL</th></tr></thead>";

        foreach ($nichosD as $fila)
        {
            $pasajes = $fila->nombrepasaje;
            $categoria = $fila->categoria;
            $nombre_cuartel = $fila->nombre_cuartel;
            $numero_nicho = $fila->numero_nicho;
            $nivel = $fila->nivel;

            $html .= "<tr><td class='id'>" .$pasajes. "</td><td class='localidad'>" .$categoria."</td><td class='localidad'>" .$nombre_cuartel."</td><td class='localidad'>" .$numero_nicho."</td><td class='localidad'>" .$nivel."</td></tr>";
        }
        $html .= "</table>";

// Imprimimos el texto con writeHTMLCell()
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);

// ---------------------------------------------------------
// Cerrar el documento PDF y preparamos la salida
// Este método tiene varias opciones, consulte la documentación para más información.
        $nombre_archivo = utf8_decode("Localidades de ".$pasaje.".pdf");
        $pdf->Output($nombre_archivo, 'I');
    }
}
