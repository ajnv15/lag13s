<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seguridad {
  /**
  * Verifica la información de el usuario y regresa el rol y los modulos a los que tiene acceso.
  *
  * @param String $p_rue Rue del usuario a verificar
  * @param STring $p_password Contraseña del usuario a verificar
  *
  * @return Object Objeto con la informacion de el rol y los modulos a los que tiene acceso
  */
  function login( $username, $p_password ){
    $CI =   &get_instance();
    $v_sql = 'SELECT
      nombre,
      user_name,
      usuarios.id_permisos,
      modulos,
      descripcion

    FROM
      saeropuerto.usuarios,saeropuerto.permisos
    WHERE
      user_name = \''.$username.'\'
    AND
      pass = \''. $p_password .'\'
    ;';






    $v_query = $CI->db->query( $v_sql );

    if( $v_query->num_rows()!=0){
      return $v_query->result();

    } else {
      return FALSE;
    }


  }


  public function getTipo($username, $p_password){
    $CI =   &get_instance();

    $v_sql = 'SELECT p.modulos from usuarios as u,
     permisos as p where u.user_name=\''. $username .'\'
     and u.pass=\''. $p_password .'\' and p.id_permisos=u.id_permisos';



     $v_query = $CI->db->query( $v_sql );

     if( $v_query->num_rows()!=0){
       return $v_query->result();

  }
}

  /*function estaBloqueada( $p_rue ){
    $CI =   &get_instance();
    $v_sql = '
      SELECT UI.intentos
      FROM admseguridad."TCUsuariosInternos" UI
      WHERE UI."RUE" = \''.$p_rue.'\'
    ';

    $query = $CI->db->query($v_sql);

    $result = $query->result();

    if($query->num_rows()){
      if($result[0]->intentos < 3){
        return FALSE;
      }else{
        return TRUE;
      }
    }else{
      return TRUE;
    }
  }

/*  function limpiaIntentos( $p_rue ){
    $CI =   &get_instance();
    $v_sql = '
      UPDATE admseguridad."TCUsuariosInternos"
      SET intentos = \'0\'
      WHERE "RUE" = \''.$p_rue.'\'
    ';

    $CI->db->query($v_sql);
  }

  /*function obtenIntentos( $p_rue ){
    $CI =   &get_instance();
    $v_sql = '
      SELECT UI.intentos
      FROM admseguridad."TCUsuariosInternos" UI
      WHERE UI."RUE" = \''.$p_rue.'\'
    ';

    $query = $CI->db->query($v_sql);

    $result = $query->result();

    return $result[0]->intentos;
  }

  function aumentaIntentos($p_rue){
    $CI =   &get_instance();

    $v_intentos = $this->obtenIntentos( $p_rue ) + 1;

    $v_sql = '
      UPDATE admseguridad."TCUsuariosInternos"
      SET intentos = \''.$v_intentos.'\'
      WHERE "RUE" = \''.$p_rue.'\'
    ';

    $CI->db->query($v_sql);
  }

/*  function bloquearCuenta( $p_rue ){
    $CI =   &get_instance();
    $CI->load->helper("security");
    $v_tiempo = date('d/m/Y H:i:s');
    $v_token = do_hash($p_rue.(string)$v_tiempo);  //Se Genera la cadena HASH.


    $v_sql = '
      UPDATE admseguridad."TCUsuariosInternos"
      SET bloqueado = \'t\', token = \''.$v_token.'\', fecha_token = \''.$v_tiempo.'\'
      WHERE "RUE" = \''.$p_rue.'\'
    ';

    $CI->db->query($v_sql);
  }*/
}
