<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sesion extends CI_Controller {

  public function index() {
  $this->load->view('headers');
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
