<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sesion extends CI_Controller {

  public function index() {
    $this->load->library('session');
    $this->session->set_userdata('tipousuario','interno');
    $this->session->set_userdata('usuario','100003');
    $tipo=$this->session->userdata('tipousuario');
    $usuario=$this->session->userdata('usuario');
    $this->load->model('lag');
    if($tipo=="interno"){
      $data=$this->lag->getUserdataInterno($usuario);
      $idusuarios_internos=$data[0]->idusuarios_internos;
      //echo $idusuarios_internos;
      $monto=$this->lag->getmontoIterno($idusuarios_internos);
      //echo $monto[0]->cantidad;


    }

//se agrega para caso de usuarios externos
    else if($tipo=="externo"){
      $data=$this->lag->getUserdataExterno($usuario);
      $idusuarios_externos=$data[0]->idusuarios_externos;
      //echo $idusuarios_internos;
      $monto=$this->lag->getmontoExterno($idusuarios_externos);
      //echo $monto[0]->cantidad;


    }



    $datos['monto']=$monto;
  $this->load->view('headers');
  $this->load->view('pagos',$datos);
  $this->load->view('asientos');
  $this->load->view('qr');
  $this->load->view('telegram');
  $this->load->view('footer');
  $this->load->library('session');

  }

  public function generarCodigo()
  {
      $nombre="semana13lagtest";
      $this->load->library("qr");
      //$this->load->view('headers');
      //echo "<h1>PHP QR Code</h1><hr/>";

      //set it to writable location, a place for temp generated PNG files
      $PNG_TEMP_DIR = $_SERVER['DOCUMENT_ROOT']."/assets/QR/temp/";

      //html PNG location prefix
      $PNG_WEB_DIR = $_SERVER['DOCUMENT_ROOT']."/assets/QR/temp/";

      //include "qrlib.php";

      //ofcourse we need rights to create temp dir
      if (!file_exists($PNG_TEMP_DIR))
          mkdir($PNG_TEMP_DIR);


      //$filename = $PNG_TEMP_DIR.'test.png';

      //processing form input
      //remember to sanitize user input in real-life solution !!!
      $errorCorrectionLevel = 'M';
      // if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
      //     $errorCorrectionLevel = $_REQUEST['level'];

      $matrixPointSize = 6;
      // if (isset($_REQUEST['size']))
      //     $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


      // if (isset($_REQUEST['data'])) {
      //
      //     //it's very important!
      //     if (trim($_REQUEST['data']) == '')
      //         die('data cannot be empty! <a href="?">back</a>');

          // user data
          $filename = $PNG_TEMP_DIR.'lag'.md5($nombre.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
          QRcode::png("192.168.1.7/".$nombre, $filename, $errorCorrectionLevel, $matrixPointSize, 2);



      //display generated file

      echo '<img src="'.base_url()."assets/QR/temp/lag".md5($nombre.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png" /><hr/>';

      //config form
      //QRtools::timeBenchmark();
      echo "Recuerda que tu referencia bancaria es 091ge123 y tienes que pagar en Bancomer";

  }


}
