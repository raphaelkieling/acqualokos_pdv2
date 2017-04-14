<?php
    class Model_cadastro extends CI_Model{
        // Cadastro da lista 
        function cadastroLista($cadastrante,$ponto_venda,$localidade,$responsavel,$revendedor,$data_cadastro,$funcionario,$documento){
            $data =array(
                'cadastrante' =>$cadastrante,
                'pontoVenda'  =>$ponto_venda,
                'localidade'  =>$localidade,
                'responsavel' =>$responsavel,
                'revendedor'  =>$revendedor,
                'dataCadastro'=>$data_cadastro
            );
            $this->db->insert('lista',$data);
            
            return $id_lista = $this->db->insert_id();


        }
        function  cadastroPessoa($id_lista,$funcionario,$documento,$i){
            $pessoa = array(
                        'codLista' =>$id_lista,
                        'nome'     =>$funcionario[$i],
                        'documento'=>$documento[$i],
                        'vindas'   =>0
                    );
            $this->db->insert('pessoa',$pessoa);
        }
        function pegaRevendedores(){
            $this->db->where('tipo',1);
            $this->db->select('nome');
            $this->db->select('idUsuario');
            
            return $this->db->get('usuario')->result_array();
        }
    }
?>