<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_chave extends CI_Controller{
    function index(){
        $this->load->view('components/header');
        $this->load->view('pages/chave/index');
    }
    function cadastro(){
        $chave = $this->input->post('chave');
        $nome = $this->input->post('nome');
        $senha = $this->input->post('senha');
        $senha_igual = $this->input->post('senha_igual');

        $this->form_validation->set_rules('chave','Chave','required|trim');
        $this->form_validation->set_rules('senha','Senha','required');
        $this->form_validation->set_rules('senha_igual','Senha','required|matches[senha]');
        
        if($this->form_validation->run() != FALSE){
            $this->load->model('Model_chave');
            $resultado_chave = $this->Model_chave->verifica($chave);
            if($resultado_chave){
                $verifica_nome = $this->Model_chave->verificaNome($nome);
                if($verifica_nome){
                    printf("<p> Desculpe, nome já existe... </span>");
                }else{      
                    $resultado_cadastro = $this->Model_chave->cadastrarUsuario($resultado_chave['idSerial'],$nome,$senha, $resultado_chave['tipo']);
                    if($resultado_cadastro){
                        printf("<p class='p'> Cadastrado </p>");
                        $this->Model_chave->cancelaChave($resultado_chave['idSerial']);
                    }else{
                        printf('<p> Não cadastrado </p>');
                    }
                }
            }else{
                printf('<p> Esta chave já está sendo utilizado por outro usuário ou NÃO existe. </p>');
            }
        }else{
            printf(validation_errors());
        }   
    }
    function criaChave(){
        if($this->session->userdata('user_logado') == NULL || $this->session->userdata('user_logado')['tipo']!=2 ){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe você não tem acesso a este conteúdo');
            redirect('/acqualokos_login','refresh');
        }
        
        $chave = md5(uniqid(rand(1,6)));
        $data = array('chave' => $chave);
        $this->load->view('components/header');
        $this->load->view('pages/chave/chave',$data);
    }
    function novaChave($chave,$permissao){
        if($this->session->userdata('user_logado') == NULL || $this->session->userdata('user_logado')['tipo']!=2 ){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe você não tem acesso a este conteúdo');
            redirect('/acqualokos_login','refresh');
        }

        $this->load->model('Model_chave');
        $data = $this->Model_chave->novaChave($chave,$permissao);
        if($data){
            printf(true);
        }else{
            printf(false);
        }
    }
    function pegaChaves(){
         if($this->session->userdata('user_logado') == NULL || $this->session->userdata('user_logado')['tipo']!=2 ){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe você não tem acesso a este conteúdo');
            redirect('/acqualokos_login','refresh');
        }
        
        $this->load->model('Model_chave');
        $data = $this->Model_chave->pegaChaves();

        foreach($data as $chaves){
            if($chaves['usado']==1){
                $color="#e74c3c";
            }else{
                $color="#2ecc71";
            }

            echo "<tr style='background:".$color.";color:white'><td>".$chaves['chave']."</td><td>".$chaves['tipo']."</td></tr>";
        }

    }
}
?>