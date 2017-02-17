<?php if ( ! defined('BASEPATH'))  exit('No direct script access allowed');


class boot extends CI_Controller{


  public function sendmesage(){
    $bootToken="360726391:AAG43p_O6CXFELPe1cafv84CEXsRxpIJMgM";
    $chatid="28896927";
    $text="'newtwxt'";
    $url="https://api.telegram.org/bot".$bootToken."/sendmessage?chat_id=".$chatid."&text=".$text;
    $message=file_get_contents($url);
  }


  public function sendImage(){

    $bootToken="360726391:AAG43p_O6CXFELPe1cafv84CEXsRxpIJMgM";
    $chatid="28896927";
    $photo= base_url()."assets/images/u224-4.png";
    $url="https://api.telegram.org/bot".$bootToken."/sendphoto?chat_id=".$chatid."&photo=".$photo;
    $message=file_get_contents($url);

  }

}



?>
