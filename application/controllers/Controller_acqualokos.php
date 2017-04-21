<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_acqualokos extends CI_Controller{
    function index(){
        $this->load->view('components/header');
        $this->load->view('pages/acqualokos/index');
    }
    function lista(){
        if($this->session->userdata('user_logado') == NULL || $this->session->userdata('user_logado')['tipo']!=2 ){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe você não tem acesso a este conteúdo');
            redirect('/acqualokos_login','refresh');
        }

        $this->load->helper('currency');
        $this->load->model('Model_acqualokos');
        $data_query = $this->Model_acqualokos->pegaListas();

        $data = array('data'=>$data_query,'model'=>$this->Model_acqualokos);

        $this->load->view('components/header');
        $this->load->view('pages/acqualokos/lista',$data);
    }
    function relatorio(){
        if($this->session->userdata('user_logado') == NULL || $this->session->userdata('user_logado')['tipo']!=2 ){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe você não tem acesso a este conteúdo');
            redirect('/acqualokos_login','refresh');
        }

        $this->load->view('components/header');
        $this->load->view('pages/acqualokos/relatorio');
    }
    function acqualokos_aceita($idLista){
        if($this->session->userdata('user_logado') == NULL || $this->session->userdata('user_logado')['tipo']!=2 ){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe você não tem acesso a este conteúdo');
            redirect('/acqualokos_login','refresh');
        }

        $this->load->model('Model_acqualokos');
        $query = $this->Model_acqualokos->aceitaLista($idLista);

        if($query){
            printf('sucesso');
        }else{
            printf('falha');
        }
        
    }
    function acqualokos_cancela($idLista){
        if($this->session->userdata('user_logado') == NULL || $this->session->userdata('user_logado')['tipo']!=2 ){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe você não tem acesso a este conteúdo');
            redirect('/acqualokos_login','refresh');
        }

        $this->load->model('Model_acqualokos');
        $query = $this->Model_acqualokos->cancelaLista($idLista);

        if($query){
            printf('sucesso');
        }else{
            printf('falha');
        }
        
    }
}