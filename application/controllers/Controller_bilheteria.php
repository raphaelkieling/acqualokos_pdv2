<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_bilheteria extends CI_Controller{
    function index(){
        if($this->session->userdata('user_logado') == NULL || $this->session->userdata('user_logado')['tipo']!=2 ){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe você não tem acesso a este conteúdo');
            redirect('/acqualokos_login','refresh');
        }    
        

        $this->load->view('components/header');
        $this->load->view('pages/bilheteria/index');
    }
    function pegaLista($palavra,$filtro){
        if($this->session->userdata('user_logado') == NULL || $this->session->userdata('user_logado')['tipo']!=2 ){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe você não tem acesso a este conteúdo');
            redirect('/acqualokos_login','refresh');
        }  

        $this->load->model('Model_bilheteria');
        $data = $this->Model_bilheteria->pegaListaFiltrada($palavra,$filtro);

        foreach($data as $pessoa){
            echo "<tr id='".$pessoa['idPessoa']."' onclick='pegaInfoPessoa(".$pessoa['codLista'].",".$pessoa['idPessoa'].")'><td>".$pessoa['nome']."</td>";
            echo "<td>".$pessoa['documento']."</td></tr>";
        }
    }
    function pessoaVeio($idPessoa){
        if($this->session->userdata('user_logado') == NULL || $this->session->userdata('user_logado')['tipo']!=2 ){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe você não tem acesso a este conteúdo');
            redirect('/acqualokos_login','refresh');
         }  

         $this->load->model('Model_bilheteria');
         $datav = $this->Model_bilheteria->pegaVindas($idPessoa);
         $data = $this->Model_bilheteria->pessoaVeio($idPessoa,$datav[0]['vindas']);

         if($data){
             printf(true);
         }else{
             printf(false);
         }
    }
    function pegaInfoPessoa($idLista,$idPessoa){
        
         if($this->session->userdata('user_logado') == NULL || $this->session->userdata('user_logado')['tipo']!=2 ){
            $this->session->unset_userdata('user_logado');
            $this->session->set_flashdata('message','Desculpe você não tem acesso a este conteúdo');
            redirect('/acqualokos_login','refresh');
         }  
        
         $this->load->model('Model_bilheteria');
         $data = $this->Model_bilheteria->pegaInfoPessoa($idLista,$idPessoa);
         
         
         header('Content-type: application/json');
         echo json_encode($data);
    }
}
?>