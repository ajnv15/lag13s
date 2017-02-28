<?php if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
$this->load->library("session");
		//$this->load->model('lag');
		$this->load->view("casi");



	}
	public function testlogin(){//copiar a welcome
  $this->load->view("ajax");
  }

	/*La siguiente función nos permite insertar el nombre y matricula en la tabla de internos*/
		public function postInterno(){//registro de internos
			$matricula=$this->input->post("matricula");

			$pass=$this->input->post("pass");
			$this->load->model('lag');
			$pass=md5($pass);
			$fd=uniqid("ds");
			$insertar="";
			if(!$this->lag->checarInterno($matricula)){
				$uniquecode="acx".substr($fd,8,14);
				if(!$this->lag->verifUniquecodeExt($uniquecode))
				{
				$insertar=$this->lag->insertarinterno($matricula,$pass,$uniquecode);
				}else{
				$uniquecode=$uniquecode.substr(uniqid(),8,10);
				$insertar=$this->lag->insertarinterno($matricula,$pass,$uniquecode);

			}
		}else{

			echo "ya estas registrado";
		}
		echo $insertar;
			//redirect("welcome/index");
		}



	public function postExterno(){//insertar externo
		$nombre=$this->input->post("nombre");
		$email=$this->input->post("email");
		$pass=$this->input->post("pass");
		$this->load->model('lag');
		$pass=md5($pass);
		$insertar="";
		if(!$this->lag->checarexterno($email)){
				$fd=uniqid("ds");
				$uniquecode="acx".substr($fd,8,14);
				if(!$this->lag->verifUniquecodeExt($uniquecode))
				{
					$insertar=$this->lag->insertarexterno($nombre,$email,$pass,$uniquecode);
				}else{
						$uniquecode=$uniquecode.substr(uniqid(),8,10);
						$insertar=$this->lag->insertarexterno($nombre,$email,$pass,$uniquecode);

					}
				}
				else{
					echo "ya estas registrado";
				}
		echo $insertar;//redirect("welcome/index");
	}

public function iniciarSesion()
{
	$this->load->model('lag');
	$usuario=$this->input->post("user");
	$pass=$this->input->post("pass");
	$pass=md5($pass);
	$interno=$this->lag->SesionInterno($usuario,$pass);
	$externo=$this->lag->SesionExterno($usuario,$pass);

	if($interno){
		  $this->load->library("session");
			$this->session->set_userdata('usuario',$interno[0]->matricula);
			$this->session->set_userdata("tipousuario","interno");
			//header("location:".base_url()."index.php/sesion/index");
			echo "ingreso";

	}
	//inicio de sesion y redireccion a nuevo controlador
	//hacer una funcion que seleccione user y pass de bd para usuarios internos
	 if($externo){

		$this->load->library("session");
		$this->session->set_userdata('usuario',$externo[0]->email);
		$this->session->set_userdata("tipousuario","externo");
		echo "ingreso";

		}
else if ($interno==false && $externo==false) {
	echo "error";

}
}



		public function EnviarEmail($email,$nombre)
		{
			$htmlContent = file_get_contents(base_url()."assets/htm/email_template.html");

			$this->load->library('mailer');
			$mail = new PHPMailer;
			//$mail->IsSMTP();
			$mail->SMTPAuth = false;
			$mail->SMTPDebug = 2;
			$mail->Host = 'mail.semana13.com.mx';
			$mail->Port = 465;
			$mail->Username = 'inscripciones@semana13.com.mx';
			$mail->Password = 'semanaLAG13';
			$mail->SMTPSecure = 'tsl';
			$mail->From = "inscripcion@semana13.com.mx";
			$mail->FromName = "inscripcion";
			$mail->Priority = 1;
			$mail->AddCustomHeader("X-MSMail-Priority: High");
			$mail->WordWrap = 50;
			$mail->addAddress("aj_nv@hotmail.com", "Arturo");
			$mail->isHTML(true);
			$mail->Subject = "Subject Text";
			$mail->Body = $htmlContent;
			$mail->AltBody = "This is the plain text version of the email content";
			if(!$mail->send())
			{
			    //echo "Mailer Error: " . $mail->ErrorInfo;
			}
			else
			{
			    echo "Message has been sent successfully";
			}
			// $htmlContent = file_get_contents(base_url()."assets/htm/email_template.html");
			//
			// $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
			// mail("aj_nv@hotmail.com","inscripcion exitosa",$htmlContent,$headers);
		}



  }
