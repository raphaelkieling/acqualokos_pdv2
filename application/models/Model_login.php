<?php
    class Model_login extends CI_Model{
        // Login normal
        function login($nome,$senha){
            
           $this->db->where('nome',$nome);
           $this->db->where('senha',$senha);

           return  $this->db->get('usuario')->row_array();
        }
    }
?>