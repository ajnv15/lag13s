<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_controller extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->database();
        $this->load->library("session");
        $this->load->helper("url");
      //  redirect(site_url("welcome/"));
        if(!$this->session->userdata("usuario")){
        	redirect(site_url("welcome/index"));

        }


    }
}
