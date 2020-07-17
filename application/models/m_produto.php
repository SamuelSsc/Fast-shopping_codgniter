<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_produto extends CI_Model
    {
        public function VerificaSeProdutoExistePorId($id){
			$retorno = $this->db->query("select * from produto a 
										 join detalhes b on b.id_detalhes = a.FK_id_detalhes
                                         where id_produto = '$id'");
            if($retorno->num_rows() > 0){
                return 1;
            }else{
                return 0;
            }
        }
        public function getProdutoId($id){
			$retorno = $this->db->query("select * from produto a 
										 join detalhes b on b.id_detalhes = a.FK_id_detalhes
										 where id_produto = '$id'");
			return $retorno->result();
        }

        public function verificarSessao($usuario){
            $retorno = $this->db->query("select * from usuario where email = '$usuario' and tipo = 'comum'");

            if($retorno->num_rows() >0){
                return 1;
            }else{
                return 0;
            }
		}
        public function getProdutos(){
            $retorno = $this->db->query("select * from produto a
                                        join detalhes b on b.id_detalhes = a.FK_id_detalhes");
            //echo $retorno;
            return $retorno->result();
		}
		
    
        public function getCelulares(){
            $retorno = $this->db->query("select * from produto a
                                    join detalhes b on b.id_detalhes = a.FK_id_detalhes where tipo='C'");
            //echo $retorno;
            return $retorno->result();
    }

        public function getNotebooks(){
            $retorno = $this->db->query("select * from produto a
            join detalhes b on b.id_detalhes = a.FK_id_detalhes where tipo='N'");
            //echo $retorno;
            return $retorno->result();
        }
        public function getAcessorios(){
            $retorno = $this ->db->query("select * from produto a
            join detalhes b on b.id_detalhes = a.FK_id_detalhes where tipo='A'");
            //echo $retorno;
            return $retorno->result();
        }
    }
    
        

?>
