<?php
    class Model_acqualokos extends CI_Model{
        // pega listas sem se importar com o usuario
        function pegaListas(){
            $this->db->join('usuario','usuario.idUsuario = lista.revendedor');
            return $this->db->get('lista')->result_array();
        }

        function pegaPessoa($id_lista){
            $this->db->where('codLista',$id_lista);
            return $this->db->get('pessoa')->result_array();
        }

        function aceitaLista($idLista){
            $this->db->where('idLista',$idLista);
            $this->db->update('lista',array('situacao'=>2));
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