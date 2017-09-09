<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {/* Mantenimiento de division funcional y grupo funcional*/

  public function __construct(){
      parent::__construct();
      $this->load->model("Login_model");

  }
    public function AddAusuario()
  {
    if ($this->input->is_ajax_request()) {
        $txt_nombre=$this->input->post("txt_nombre");
        $txt_apellido =$this->input->post("txt_apellido");
        $txt_usuario =$this->input->post("txt_usuario");
        $txt_clave =sha1($this->input->post("txt_clave"));
        $tipoUser =$this->input->post("tipoUser");
      if($this->Login_model->AddAusuario($txt_nombre,$txt_apellido,$txt_usuario,$txt_clave,$tipoUser)== true)
        echo "Se registro nuevos usuario";
      else
        echo "Se registro nuevos usuario"; 
      
    }
    else
    {
      show_404();
    }

  }
    public function UpdaCambioContrasena()
  {
    if ($this->input->is_ajax_request()) {
        $IdUsuario=$this->input->post("IdUsuario");
        $ContraseActual =sha1($this->input->post("ContraseActual"));
        $ContraseNueva =sha1($this->input->post("ContraseNueva"));
        $resp = $this->Login_model->loginVerificarContrasenia($IdUsuario,$ContraseActual);
          if($resp)
                {
                  $data = [
                    "password" => $ContraseNueva
                    ];    
                	 if($this->Login_model->loginCambio($IdUsuario,$data)==true)
                	   echo "Se cambio La contraseña";
                	   else
                	   echo "No Se cambio La contraseña";


                }
                else
                {
                  echo "error no coincide la contraseña";
                }
        //$tipoUser =$this->input->post("ContraseNueva");

      /*if($this->Login_model->AddAusuario($txt_nombre,$txt_apellido,$txt_usuario,$txt_clave,$tipoUser)== true)
        echo "Se registro nuevos usuario";
      else
        echo "Se registro nuevos usuario"; */
      
    }
    else
    {
      show_404();
    }

  }

  public function  Updateusuario()
  {
    if ($this->input->is_ajax_request()) {

        $id_usuarioA=$this->input->post("id_usuarioA");
        $txt_nombre=$this->input->post("nombresA");
        $txt_apellido =$this->input->post("apellidosA");
        $txt_usuario =$this->input->post("usuarioA");
        $txt_clave =sha1($this->input->post("txt_clave"));
        $tipoUser =$this->input->post("tipo_usuarioA");
      if($this->Login_model->Updateusuario($id_usuarioA,$txt_nombre,$txt_apellido,$txt_usuario,$tipoUser)== true)
        echo "Se actulizo el  usuario";
      else
        echo "Se actulizo el  usuario"; 
      
    }
    else
    {
      show_404();
    }

  }

  public function get_usuarios(){
     if ($this->input->is_ajax_request()) {

      $datos = $this->Login_model->get_usuarios();
      echo json_encode($datos);
      
    }
    else
    {
      show_404();
    }
      
  }

  public function index()
  {
    $this->_load_layout('Admin/Usuarios/usuarios');
    //$this->_load_layout('Front/Administracion/frmFuncion');
  }

  function _load_layout($template)
    {
      $this->load->view('layout/admin/alquiler/header');
      $this->load->view($template);
      $this->load->view('layout/admin/alquiler/footer');
    }

}
