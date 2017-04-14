<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_principal extends CI_Controller{
    function index(){
        $this->load->helper(['url','form']);
        $this->load->view('pages/principal/index');
    }
}
?>