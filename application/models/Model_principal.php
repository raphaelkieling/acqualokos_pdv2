<?php
    class Model_principal extends CI_Model{
        function pegaLista($palavra){
            $this->db->like('nome',$palavra);
            $this->db->where('situacao',2);
            $this->db->join('pessoa','pessoa.codLista = lista.idLista');
            return $this->db->get('lista')->result_array();
        }
        function pegaListaTotal(){
            $this->db->where('situacao',2);
            $this->db->join('pessoa','pessoa.codLista = lista.idLista');
            return $this->db->get('lista')->result_array();
        }
    }
?>