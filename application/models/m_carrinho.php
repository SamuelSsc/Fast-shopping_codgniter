<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_carrinho extends CI_Model
    {
        public function chamaCarrinho($email, $senha){
            $retorno = $this->db->query("insert into carrinho (Fk_id_usuario,
                                         Fk_id_produto, estado) values ('$id_usu', $id_prod', '$estado')";
            if($retorno->num_rows() > 0){
                $this->db->query("update usuario set logado = true where email='$email'");
                return 1;
            }else{
                return 0;
            }
        }

        /*public function verificarSessao($usuario){
            $retorno = $this->db->query("select * from usuario where email = '$usuario' and tipo = 'comum'");

            if($retorno->num_rows() >0){
                return 1;
            }else{
                return 0;
            }
        }
    }

?>
