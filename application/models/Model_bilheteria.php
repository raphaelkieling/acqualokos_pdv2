<?php
    class Model_bilheteria extends CI_Model{
        function pegaListaFiltrada($filtro="",$palavra="",$orderby=""){
            $encode_palavra = urldecode($palavra);
            $this->db->like($filtro,$encode_palavra);
            $this->db->where('situacao',2);
            $this->db->join('pessoa','pessoa.codLista = lista.idLista');
            $this->db->order_by($orderby);
            return $this->db->get('lista')->result_array();
        }

        function pegaInfoPessoa($idLista,$idPessoa){
            $this->db->select('usuario.*,pessoa.vindas as vindas,lista.*');
            $this->db->where('idLista',$idLista);
            $this->db->where('idPessoa',$idPessoa);
            $this->db->join('usuario','usuario.idUsuario = lista.revendedor');
            $this->db->join('pessoa','pessoa.codLista = lista.idLista');
            return $this->db->get('lista')->result_array();
        }
        function pegaVindas($idPessoa){
             $this->db->where('idPessoa',$idPessoa);
             $this->db->select('vindas');
             return $this->db->get('pessoa')->result_array();
        }
        function pessoaVeio($idPessoa,$vindas){
            $this->db->where('idPessoa',$idPessoa);
            $this->db->set('vindas',$vindas+1);
            $this->db->update('pessoa');
            
            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }
    }
?>