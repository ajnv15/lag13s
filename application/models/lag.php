<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lag extends CI_Model {

  public function checarInterno($matricula)
  {
    $query="select * from  usuarios_internos where matricula='$matricula'";
    $query2= $this->db->query($query);
    if($query2->num_rows>0){
      return true;
    }
    else {
      return false;
    }
  }
  public function checarexterno($email)
  {
    $query="select * from  usuarios_externos where email='$email'";
    $query2= $this->db->query($query);
    if($query2->num_rows>0){
      return true;
    }
    else {
      return false;
    }
  }
    public function getUserdataInterno($matricula){
      $query="select * from usuarios_internos where matricula='$matricula'";
      $query2= $this->db->query($query);
        return $query2->result();

    }

    public function getUserdataExterno($email){
      $query="select * from usuarios_externos where email='$email'";
      $query2= $this->db->query($query);
      return $query2->result();

    }

    public function insertarinterno($matricula,$pass,$uniquecode){
          $query="insert into usuarios_internos (matricula,password,unique_code)
          values ('$matricula','$pass','$uniquecode')";
          $query2= $this->db->query($query);

          if ($query2) {
            return "Se ha registrado con exito";

          }
        else {
          return "ha ocurrido un error, por favor intenta de nuevo";
        }
    }

    public function verifUniquecodeExt($code){

      $query="select * from usuarios_externos where unique_code='$code'";
      $query2= $this->db->query($query);

      if ($query2->num_rows()>0) {
        return true;

      }
      else{

        return false;
      }

    }


public function insertarexterno($nombre,$email,$pass,$code){
  $query="insert into usuarios_externos(nombre,email,password,unique_code)
  values ('$nombre','$email','$pass','$code')";
  $query2= $this->db->query($query);

  if ($query2) {
    return "Se ha registrado con exito";

  }
  else {
  return "ha ocurrido un error, por favor intenta de nuevo";
  }
}

  public function SesionInterno($usuario,$pass)
  {
      $query="select * from  usuarios_internos where matricula='$usuario' and password='$pass'";
      $query2= $this->db->query($query);

      if ($query2->num_rows()>0) {
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
  
  if ($query2->num_rows()>0) {
    return $query2->result();

  }
else {
  return false;

}
}

public function getmontoIterno($id)
{
  $query="select sum(monto) as cantidad from pagos_internos where idusuarios_internos='$id'";
  $query2= $this->db->query($query);

  if ($query2){
    return $query2->result();


  }
}

//se agrega función de getmonto para externos
public function getmontoExterno($id)
{
  $query="select sum(monto) as cantidad from pagos_externos where idusuarios_externos='$id'";
  $query2= $this->db->query($query);

  if ($query2){
    return $query2->result();


  }
}

}


?>
