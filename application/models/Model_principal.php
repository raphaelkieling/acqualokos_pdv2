<?php
    class Model_principal extends CI_Model{
        function pegaLista($palavra){
            $this->db->like('nome',$palavra);
            $this->db->or_like('documento',$palavra);
            return $this->db->get('pessoa')->result_array();
        }
    }
?>