<?php if ( ! defined('BASEPATH'))  exit('No direct script access allowed');


class bot extends CI_Controller{


  public function sendmesage(){
    $bootToken="372621238:AAEFrCbMNpEE2mwBk2t8ClfHWYWPHWNjnvk";
    $chatid="268436328";
    $text="'newtwxt'";
    $url="https://api.telegram.org/bot".$bootToken."/sendmessage?chat_id=".$chatid."&text=".$text;
    $message=file_get_contents($url);
  }


  public function sendImage(){

    $bootToken="372621238:AAEFrCbMNpEE2mwBk2t8ClfHWYWPHWNjnvk";
    $chatid="268436328";
    $photo= 'https://www.w3schools.com/css/trolltunga.jpg';
    $url="https://api.telegram.org/bot".$bootToken."/sendphoto?chat_id=".$chatid."&photo=".$photo;
    $message=file_get_contents($url);

  }

}



?>
