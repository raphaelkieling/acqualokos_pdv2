<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_principal extends CI_Controller{
    function index(){
        $this->load->view('pages/principal/index');
    }
    function lista_procura($palavra){
        $this->load->model('Model_principal');
        $data = $this->Model_principal->pegaLista($palavra);
        header('Content-type:application/json');
        echo json_encode($data);
    }
    function lista_procura_total(){
         $this->load->model('Model_principal');
         $data = $this->Model_principal->pegaListaTotal();
         header('Content-type:application/json');
         echo json_encode($data);

    }
}
?>