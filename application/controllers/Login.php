<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {/* Mantenimiento de division funcional y grupo funcional*/

	public function __construct(){
      parent::__construct();
      $this->load->model("Login_model");

	}
 
 public function ingresar(){
  if ($this->input->is_ajax_request()) {

       $usuario=$this->input->post("txt_usuario");
       $contrasenia=sha1($this->input->post("contrasenia"));
       $resp = $this->Login_model->login($usuario,$contrasenia);
          if($resp)
                {
                    $data = [
                    "id" => $resp->id_usuario,
                    "name" => $resp->nombres,
                    "tipo_usuario" => $resp->tipo_usuario,
                    "login" => TRUE
                    ];    
                    $this->session->set_userdata($data);
                }
                else
                {
                  echo "error";
                }
    }
    else
    {
      show_404();
    }
 }
	 public function cerrar()
	 {
	  $this->session->sess_destroy();
	  redirect('login', 'refresh');
	 }
	public function index()
	{
	    if($this->session->userdata('login'))
	    {
	      redirect(site_url('Alquiler/'));
	    }
   			 else
	    {
	      $this->load->view('front/login');

	    }
   }


}
