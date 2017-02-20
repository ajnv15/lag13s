<?php if ( ! defined('BASEPATH'))  exit('No direct script access allowed');


class bot extends CI_Controller{

  public function msnEnvio()
  {
    $this->load->view('headwocont');
    $this->load->view('msnTele');
    $this->load->view('footer');


  }
  public function receiveMessage(){
    $bootToken="372621238:AAEFrCbMNpEE2mwBk2t8ClfHWYWPHWNjnvk";
    $content = file_get_contents("php://input");
    $update = json_decode($content, true);
    $chatid = $update["message"]["chat"]["id"];
    $mensaje = $update["message"]["text"];
    //$mensaje=strtolower($mensaje);

    $this->load->model('botChat');
    if(!$this->botChat->verifChatid($chatid))
      {

        $this->botChat->insertarChatid($chatid);
      }



    $cmd=$mensaje;
    if(strpos($mensaje,"cx"))
      {
        $cmd="/codigo";
      }


      switch ($cmd) {
        case '/start':
          $text="Bienvenido al evento de semana de adminitración y gestión, espera el lanzamiento oficial!!!";
          break;
        case '/help':
        $text="Aun no tenemos comandos disponibles, espera el lanzamiento oficial";
        break;
        case '/codigo':
          $text= "tu codigo se ha insertado con exito or tu codigo no se encuentra, inicia sesión en la pagina para ver tu codigo en la seccion de telegram";
          break;
        case '/qr':
        //si existe en chat id en la base de datos debemos determina si se ha liberado el pago y enviar la imagen
        //si no existe o esta registrado no se envia la imagen.
        $text="Se ha enviado el codigo qr";
        break;

        default:
          $text="No entiendo tu mensaje envia /help para ver los comando disponibles";
          break;
      }

    $url="https://api.telegram.org/bot".$bootToken."/sendmessage?chat_id=".$chatid."&text=".$text."&disable_notification=true";
    $message=file_get_contents($url);

  }


  public function sendmesage(){
    $bootToken="372621238:AAEFrCbMNpEE2mwBk2t8ClfHWYWPHWNjnvk";
    $chatid="28896927";
    $text="'newtwxt'";
    $url="https://api.telegram.org/bot".$bootToken."/sendmessage?chat_id=".$chatid."&text=".$text."&disable_notification=false";
    $message=file_get_contents($url);
  }

  public function test()
  {
    $chat_id="test3";
    $query="insert into bot_chats (chat_id, asociado) values ('$chat_id',false)";
    $query2= $this->db->query($query);
    if($query2){
      echo "se inserto correctamente";

    }
    else{

      echo $this->db->_error_message();
    }
  }


  public function sendImage(){

    $bootToken="372621238:AAEFrCbMNpEE2mwBk2t8ClfHWYWPHWNjnvk";
    $chatid="28896927";
    $photo= "http://semana13.com.mx/assets/images/test5de5594eed543f2f055383129e07662a.png";
    $url="http://api.telegram.org/bot".$bootToken."/sendphoto?chat_id=".$chatid."&photo=".$photo."&disable_notification=true";
    $message=file_get_contents($url);

  }


public function receiveMessage2(){
  $bootToken="372621238:AAEFrCbMNpEE2mwBk2t8ClfHWYWPHWNjnvk";
  // $content = file_get_contents("php://input");
  // $update = json_decode($content, true);
  // $chatid = $update["message"]["chat"]["id"];
  // $mensaje = $update["message"]["text"];
  //$mensaje=strtolower($mensaje);
  $chatid=$this->input->get('id');
  $mensaje=$this->input->get('g');
  $this->load->model('botChat');
  if(!$this->botChat->verifChatid($chatid))
    {
      $this->botChat->insertarChatid($chatid);
    }



  $cmd="fdcx";
  if(strpos($mensaje,"cx"))
    {
      $cmd="/codigo";
    }


    switch ($cmd) {
      case '/start':
        $text="Bienvenido al evento de semana de adminitración y gestión, espera el lanzamiento oficial!!!";
        break;
      case '/help':
      $text="Aun no tenemos comandos disponibles, espera el lanzamiento oficial";
      break;
      case '/codigo':
        $text= "tu codigo se ha insertado con exito or tu codigo no se encuentra, inicia sesión en la pagina para ver tu codigo en la seccion de telegram";
        break;
      case '/qr':
      //si existe en chat id en la base de datos debemos determina si se ha liberado el pago y enviar la imagen
      //si no existe o esta registrado no se envia la imagen.
      $text="Se ha enviado el codigo qr";
      break;

      default:
        $text="No entiendo tu mensaje envia /help para ver los comando disponibles";
        break;
    }

  // $url="https://api.telegram.org/bot".$bootToken."/sendmessage?chat_id=".$chatid."&text=".$text."&disable_notification=true";
  // $message=file_get_contents($url);

}
}


?>
