<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lag extends CI_Model {


    public function insertarinterno($matricula,$nombre){
          $query="insert into internos (matricula,nombre)
          values ('$matricula','$nombre')";
          $query2= $this->db->query($query);

          if ($query2) {
            echo "exito";

          }
        else {
          echo "fallo";
        }
    }
  }
/*public function insertarexterno($nombrext,$,$telcasa,$telofi,$telcel){
  $query="insert into externo(Nombre,Apellido,TelefonoCasa,TelefonoOficina,TelefonoCelular,Direccion)
  values ('$propietario','$apellido','$telcasa','$telofi','$telcel','$direc')";
=======
    public function insertarinterno($matricula,$nombre,$pass){
          $query="insert into internos (matricula,nombre,pass)
          values ('$matricula','$nombre','$pass')";
          $query2= $this->db->query($query);

          if ($query2) {
            return "Se ha registrado con exito";

          }
        else {
          return "ha ocurrido un error, por favor intenta de nuevo";
        }
    }

public function insertarexterno($nombre,$email,$pass){
  $query="insert into usuarios_externos(nombre,email,pass)
  values ('$nombre','$email',$pass)";
>>>>>>> release/version-1.0.0
  $query2= $this->db->query($query);

  if ($query2) {
    echo "exito";

  }
else {
  echo "fallo";
}
}
<<<<<<< HEAD
*/
=======

public function SesionInterno($usuario,$pass)
{
  $query="select * from  usuarios_internos where matricula='$usuario' and password='$pass'";
  $query2= $this->db->query($query);

  if ($query2) {
    return $query2->result();

  }
else {
  return false;

}
}

public function SesionExterno($usuario,$pass)
{
  $query="select * from  usuarios_externos where email='$usuario' and password='$pass'";
  $query2= $this->db->query($query);

  if ($query2) {
    return $query2->result();

  }
else {
  return false;

}
}
}



?>
