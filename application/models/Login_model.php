<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login($email, $password){
		$this->db->where("email", $email);
		$this->db->where("password", $password);
		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
	function loginVerificarContrasenia($id_usuario,$password){
			$this->db->where("id_usuario",$id_usuario);
			$this->db->where("password",$password);
			$resultados = $this->db->get("usuarios");
			if ($resultados->num_rows()>0) {
				return $resultados->row();
			}
			else{
				return false;
			}
	}
	function loginCambio($IdUsuario,$data){
			$this->db->where('id_usuario', $IdUsuario);
            $this->db->update('usuarios', $data);
			if ($this->db->affected_rows()>0) {
				return true;
			}
			else{
				return false;
			}
	}
	function get_usuarios(){
		$usuario=$this->db->query("call sp_usuarios()");
		if ($usuario->num_rows()>= 0) 
            {
                return $usuario->result();
            } else 
            {
                return null;
            }
	}
	function AddAusuario($txt_nombre,$txt_apellido,$txt_usuario,$txt_clave,$tipoUser){
		
		$this->db->query("call sp_usuario_c('".$txt_nombre."','".$txt_apellido."','".$txt_usuario."','".$txt_clave."','".$tipoUser."')");
		 if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

	}
	function Updateusuario($id_usuarioA,$txt_nombre,$txt_apellido,$txt_usuario,$tipoUser){
		
		$this->db->query("call sp_usuarios_u('".$id_usuarioA."','".$txt_nombre."','".$txt_apellido."','".$txt_usuario."','".$tipoUser."')");
		 if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

	}

}