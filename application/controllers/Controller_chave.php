<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_chave extends CI_Controller{
    function index(){
        $this->load->view('components/header');
        $this->load->view('pages/chave/index');
    }
}
?>