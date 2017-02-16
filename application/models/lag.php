<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lag extends CI_Model {

    public function insertarinterno($matricula,$nombre){
          $query="insert into internos (matricula,nombre)
          values ('$matricula','$nombre')";
          $query2= $this->db->query($query);

          if ($query2) {
            return "Se ha registrado con exito";

          }
        else {
          return "ha ocurrido un error, por favor intenta de nuevo";
        }
    }
  }
public function insertarexterno($nombre,$email,$pass){
  $query="insert into usuarios_externos(nombre,email)
  values ('$nombre','$email',$pass)";
  $query2= $this->db->query($query);

  if ($query2) {
    echo "exito";

  }
else {
  echo "fallo";
}
}


?>
