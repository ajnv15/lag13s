<?php if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view("tes3");


	}
	/*La siguiente función nos permite insertar el nombre y matricula en la tabla de internos*/
	public function postInterno(){
		$matricula=$this->input->post("matricula");
		//$nombre=$this->input->post("nombre");
		$pass=$this->input->post("pass");
		$this->load->model('lag');
		$this->lag->insertar($matricula,$nombre,$pass);
		redirect("welcome/index");
	}

	public function postExterno(){
		$nombre=$this->input->post("nombre");
		$email=$this->input->post("email");
		$pass=$this->input->post("pass");
		$this->load->model('lag');
		$this->lag->insertar($nombre,$email,$pass);
		redirect("welcome/index");
	}

public function iniciarSesion()
{

	$usuario=$this->input->post("user");
	$pass=$this->input->post("pass");
	$interno=$this->load->model->lag->iniciointerno($usuario,$pass);
	if($interno){
		  $this->load->library("session");
			$this->session->set_userdata('usuario',$interno->nombre);

	}
	//inicio de sesion y redireccion a nuevo controlador
	//hacer una funcion que seleccione user y pass de bd para usuarios internos
	else if($externo){

		$externo=$this->load->model->lag->inicioExterno($email,$pass);
		$query="select * from usuarios_externos";
		$query2=$this->db->query($query);
		return $query2->result();
	}

else {
	return "no existe el usuario";

}


}




  }
