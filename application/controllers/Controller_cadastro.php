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
        $descricao   = $this->input->post('descricao');
        $revendedor = $this->input->post('revendedor');
        $data_cadastro = date("Y-m-d");
        $funcionario = $this->input->post('f[]');
        $documento   = $this->input->post('d[]');
        
        //html encoded
        $cadastrante = htmlspecialchars($cadastrante);
        $ponto_venda = htmlspecialchars($ponto_venda);
        $localidade  = htmlspecialchars($localidade);
        $responsavel = htmlspecialchars($responsavel);
        $descricao   = htmlspecialchars($descricao);
        $revendedor  = htmlspecialchars($revendedor);

        //colocando tudo em minusculo e botando a primeira letra em maiusculo
        $cadastrante = ucfirst(strtolower($cadastrante));
        $ponto_venda = ucfirst(strtolower($ponto_venda));
        $localidade  = ucfirst(strtolower($localidade));
        $responsavel = ucfirst(strtolower($responsavel));
        $descricao   = ucfirst(strtolower($descricao));
        $revendedor  = ucfirst(strtolower($revendedor));

        //validação do formulário
        $this->form_validation->set_rules('pontodevenda','Ponto de Venda','required|trim');
        $this->form_validation->set_rules('localidade','Localidade','required|trim');
        $this->form_validation->set_rules('responsavel','Responsavel','required|trim');
        $this->form_validation->set_rules('descricao','Descrição','trim');
        $this->form_validation->set_rules('revendedor','Revendedor','required|trim');

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
                $descricao,
                $revendedor,
                $data_cadastro,
                $funcionario,
                $documento);

            //se alguma linha for afetada pelo cadastro da lista ele cadastra os funcionarios
            if($codLista){
                //for para inserir todas as pessoas da lista verificando se o documento não tá vazio
                for($i=0;$i<count($funcionario);$i++){
                    if(trim($funcionario[$i]) !=""){
                        if(trim($documento[$i]) !=""){
                            $funcionario[$i] = htmlspecialchars($funcionario[$i]);
                            $documento[$i] = htmlspecialchars($documento[$i]);
                            $this->Model_cadastro->cadastroPessoa($codLista,$funcionario,$documento,$i);
                        }
                    }        
                }

                $this->load->view('components/header');
                $this->load->view('pages/cadastro_de_lista/success');
            } //FInal do if $codLista
        } //final do ELSE
    }//final da função
}//final da classe
?>