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
  $query2= $this->db->query($query);

  if ($query2) {
    echo "exito";

  }
else {
  echo "fallo";
}
}
*/

?>
