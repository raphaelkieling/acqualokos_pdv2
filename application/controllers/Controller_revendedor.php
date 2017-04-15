<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_revendedor extends CI_Controller{
    function index(){
        $this->load->view('components/header');
        $this->load->view('pages/revendedor/index');
    }
    function lista(){
        if($this->session->userdata('user_logado') == NULL || $this->session->userdata('user_logado')['tipo']!=1 ){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe você não tem acesso a este conteúdo');
            redirect('/revendedor_login','refresh');
        }

        $this->load->model('Model_revendedor');
        $data_query = $this->Model_revendedor->pegaListas($this->session->userdata('user_logado')['idUsuario']);

        $data = array('data'=>$data_query,'model'=>$this->Model_revendedor);

        $this->load->view('components/header');
        $this->load->view('pages/revendedor/revendedor_listas',$data);
    }
}
?>