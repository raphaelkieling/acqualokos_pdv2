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
}
?>