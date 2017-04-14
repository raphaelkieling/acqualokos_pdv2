<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_cadastro extends CI_Controller{
    function index(){
        $this->load->helper('form');

        $this->load->view('components/header');
        $this->load->view('pages/cadastro_de_lista/index');
    }
}
?>