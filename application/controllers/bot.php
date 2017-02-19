<?php if ( ! defined('BASEPATH'))  exit('No direct script access allowed');


class bot extends CI_Controller{


  public function receiveMessage(){
    $bootToken="372621238:AAEFrCbMNpEE2mwBk2t8ClfHWYWPHWNjnvk";
    $content = file_get_contents("php://input");
    $update = json_decode($content, true);
    $chatid = $update["message"]["chat"]["id"];
    $mensaje = $update["message"]["text"];
    //$mensaje=strtolower($mensaje);
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


  public function sendImage(){

    $bootToken="372621238:AAEFrCbMNpEE2mwBk2t8ClfHWYWPHWNjnvk";
    $chatid="28896927";
    $photo= base_url()."assets/images/test5de5594eed543f2f055383129e07662a.png";
    $url="http://api.telegram.org/bot".$bootToken."/sendphoto?chat_id=".$chatid."&photo=".$photo."&disable_notification=true";
    $message=file_get_contents($url);

  }

}




?>
