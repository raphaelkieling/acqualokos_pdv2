<?php
    class Model_revendedor extends CI_Model{
        // pega listas referentes ao usuario
        function pegaListas($usuario){
            $this->db->where('revendedor',$usuario);
            return $this->db->get('lista')->result_array();
        }
        function pegaPessoa($id_lista){
            $this->db->where('codLista',$id_lista);
            return $this->db->get('pessoa')->result_array();
        }
    }
?>