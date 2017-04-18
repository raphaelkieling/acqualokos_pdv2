<?php
    class Model_chave extends CI_Model{
        function verifica($chave){
            $this->db->where('chave',$chave);
            $this->db->where('usado',0);
            return $this->db->get('serial')->row_array();
        }

        function cadastrarUsuario($chave,$nome,$senha,$tipo){
            $data = array(
                'codSerial'=>$chave,
                'nome'=>$nome,
                'senha'=>md5($senha),
                'tipo'=>$tipo
            );
            $this->db->insert('usuario',$data);
            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function verificaNome($nome){
            $this->db->where('nome',$nome);
            return $this->db->get('usuario')->row_array();
        }
        
        function cancelaChave($chave){
            $this->db->where('idSerial',$chave);
            $this->db->set('usado',1);
            $this->db->update('serial');
        }

        function novaChave($chave,$permissao){
            $data = array(
                'chave'=>$chave,
                'tipo'=>$permissao
            );
            $this->db->insert('serial',$data);
            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function pegaChaves(){
            return $this->db->get('serial')->result_array();
        }
    }
?>