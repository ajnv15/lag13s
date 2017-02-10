<?php if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('headers');
		$this->load->model('lag');
		$this->load->view("tes3");

					}
	/*La siguiente función nos permite insertar el nombre y matricula en la tabla de internos*/
	public function post(){
	$matricula=$this->input->post("matricula");
	$nombre=$this->input->post("nombre");
	$this->load->model('lag');
	$this->lag->insertar($matricula,$nombre);
	redirect("welcome/index");
	}

  }
