<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_cadastro extends CI_Controller{
    function index(){
        $this->load->view('components/header');
        $this->load->view('pages/cadastro_de_lista/index');
    }
    
    function lista(){
        if($this->session->userdata('user_logado')== NULL){
            redirect('/cadastro_login','refresh');
        }

        $this->load->model('Model_cadastro');
        $array_revendedores = $this->Model_cadastro->pegaRevendedores();
        $data = array('array_revendedores' => $array_revendedores);

        $this->load->view('components/header');
        $this->load->view('pages/cadastro_de_lista/cadastro',$data);
    }

    function cadastro(){
        if($this->session->userdata('user_logado')== NULL){
            redirect('/cadastro_login','refresh');
        }
        $cadastrante = $this->session->userdata('user_logado')["idUsuario"];
        $ponto_venda = $this->input->post('pontodevenda');
        $localidade  = $this->input->post('localidade');
        $responsavel = $this->input->post('responsavel');
        $revendedor = $this->input->post('revendedor');
        $data_cadastro = date("d-m-Y");



        $funcionario = $this->input->post('f[]');
        $documento   = $this->input->post('d[]');

        $this->load->model('Model_cadastro');

        //retorna a ultima lista cadastrada
        $codLista = $this->Model_cadastro->cadastroLista(
            $cadastrante,
            $ponto_venda,
            $localidade,
            $responsavel,
            $revendedor,
            $data_cadastro,
            $funcionario,
            $documento);
        
        //for para inserir todas as pessoas da lista
         for($i=0;$i<count($funcionario);$i++){
            if(trim($funcionario[$i]) !=""){
                $this->Model_cadastro->cadastroPessoa($codLista,$funcionario,$documento,$i);
            }        
         }

         var_dump($revendedor);
    }
}
?>