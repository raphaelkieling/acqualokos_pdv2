<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_cadastro extends CI_Controller{
    function index(){
        $this->load->view('components/header');
        $this->load->view('pages/cadastro_de_lista/index');
    }
    
    function lista(){
        if($this->session->userdata('user_logado')== NULL){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe nome ou senha incorretos');
            redirect('/cadastro_login','refresh');
        }

        $this->load->model('Model_cadastro');
        $array_revendedores = $this->Model_cadastro->pegaRevendedores();
        $data = array('array_revendedores' => $array_revendedores);

        $this->load->view('components/header');
        $this->load->view('pages/cadastro_de_lista/cadastro',$data);
    }

    function cadastro(){
        //verifica se está logado
        if($this->session->userdata('user_logado') == NULL){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe nome ou senha incorretos');
            redirect('/cadastro_login','refresh');
        }

        //coloca os posts em variáveis para serem tratadas e usadas
        $cadastrante = $this->session->userdata('user_logado')["idUsuario"];
        $ponto_venda = $this->input->post('pontodevenda');
        $localidade  = $this->input->post('localidade');
        $responsavel = $this->input->post('responsavel');
        $revendedor = $this->input->post('revendedor');
        $data_cadastro = date("Y-m-d");
        $funcionario = $this->input->post('f[]');
        $documento   = $this->input->post('d[]');
        
        //validação do formulário
        $this->form_validation->set_rules('pontodevenda','Ponto de Venda','required|trim');
        $this->form_validation->set_rules('localidade','Localidade','required|trim');
        $this->form_validation->set_rules('responsavel','Responsavel','required|trim');
        $this->form_validation->set_rules('revendedor','Revendedor','required|trim');
        $this->form_validation->set_rules('f','Funcionario','min_length[1]');

        if($this->form_validation->run()==FALSE){
           $this->lista();
        }else{
            //pega o modelo do cadastro para usar as funções
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

            //se alguma linha for afetada pelo cadastro da lista ele cadastra os funcionarios
            if($codLista){
                //for para inserir todas as pessoas da lista
                for($i=0;$i<count($funcionario);$i++){
                    if(trim($funcionario[$i]) !=""){
                        $this->Model_cadastro->cadastroPessoa($codLista,$funcionario,$documento,$i);
                    }        
                }

                $this->load->view('components/header');
                $this->load->view('pages/cadastro_de_lista/success');
            } //FInal do if $codLista
        } //final do ELSE
    }//final da função
}//final da classe
?>