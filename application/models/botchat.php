<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class botchat extends CI_Model {


  public function verifChatid($chatid){

    $query="select * from bot_chats where chat_id='$chatid'";
    $query2= $this->db->query($query);

    if ($query2->num_rows()>0) {
      return true;

    }
    else{

      return false;
    }

  }

  public function insertarChatid($chatid){

    $query="insert into bot_chats (chat_id, asociado) values (".$chatid.",FALSE)";
    $query2= $this->db->query($query);
    return true;

  }
}
