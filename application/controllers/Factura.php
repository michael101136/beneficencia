<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Factura extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('mydompdf');
        $this->load->model('Alquiler_model');
    }

    private function createFolder()
    {
        if(!is_dir("./files"))
        {
            mkdir("./files", 0777);
            mkdir("./files/pdfs", 0777);
        }
    }


    public function index()
    {

       
        $data = array(
            'title' => 'BENEFICENCIA PUBLICA  DE ABANCAY 2017',
            'mensaje' => 'NO HAY FACTURA',
            'factura' => $this->Alquiler_model->factura()
        );
        if(count($data['factura'])>0)
        {
            $html=$this->load->view('admin/Factura/Factura_Alquiler', $data, true);
            $this->mydompdf->load_html($html);
            $this->mydompdf->render();
            $this->mydompdf->stream("ReporteMetrado.pdf", array("Attachment" => false));
        }else{
            var_dump($data['mensaje']);exit;
        }
        
    }
    
}

