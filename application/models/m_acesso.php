<?php

    defined('BASEPATH') OR exit('No direct script access allwed');

    class M_acesso extends CI_Model
    {
        public function validalogin($email, $senha){
            $retorno = $this->db->query("select * from usuario
                                        where email = '$email'
                                        and senha = '$senha'");
            if($retorno->num_rows() > 0){
                $this->db->query("update usuario set logado = true where email='$email'");
                return 1;
            }else{
                return 0;
            }
		}
		
		public function capturaUsuarioLogado($email){
			$retorno = $this->db->query("select * from usuario where email='$email' and logado=true");

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
    }

?>
