<?php
    class Model_revendedor extends CI_Model{
        // pega listas referentes ao usuario
        function pegaListas($usuario){
            $this->db->where('revendedor',$usuario);
            $this->db->join('usuario','usuario.idUsuario = lista.revendedor');
            return $this->db->get('lista')->result_array();
        }
        function pegaPessoa($id_lista){
            $this->db->where('codLista',$id_lista);
            return $this->db->get('pessoa')->result_array();
        }
        function aceitaLista($idLista){
            $this->db->where('idLista',$idLista);
            $this->db->update('lista',array('situacao'=>1));
            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }
        function cancelaLista($idLista){
            $this->db->where('idLista',$idLista);
            $this->db->update('lista',array('situacao'=>3));

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }
    }
?>