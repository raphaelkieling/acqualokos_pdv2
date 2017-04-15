<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_login extends CI_Controller{
    function login($lugar){
        $this->session->unset_userdata('user_logado');

        $nome  = $this->input->post('nome');
        $senha = $this->input->post('senha');

        $this->load->model('Model_login');
        $data = $this->Model_login->login($nome, md5($senha));

        //ROTAS-----------------------------------------
        if($data){
            $this->session->set_userdata('user_logado',$data);
        }
        if($lugar == 'Cadastro'){
            if($data){
                redirect('/cadastro_lista','refresh');
            }else{
                 $this->session->set_flashdata('message','Desculpe nome ou senha incorretos');
                 redirect('/cadastro_login','refresh');
            }
        }              
        if($lugar == 'Revendedor'){
            if($data){
                redirect('/revendedor','refresh');
            }else{
                $this->session->set_flashdata('message','Desculpe nome ou senha incorretos');
                redirect('/revendedor_login','refresh');
            }
        }
        
        $this->session->set_flashdata('message',$lugar);
            redirect($voltar,'refresh');
        // Rotas--------------------------------------
    }

    function sair(){
        $this->session->unset_userdata('user_logado');
        redirect('/','refresh');
    }
}
?>