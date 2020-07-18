<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_carrinho extends CI_Model
    {
		public function chamaCarrinho($id_usuario){
			$retorno = $this->db->query("select * from carrinho a 
										 join usuario b on b.id_usuario = a.FK_id_usuario
										 join produto c on c.id_produto = a.FK_id_produto
										 where b.id_usuario = '$id_usuario' and estado = false
										 ");
				
			return $retorno->result();
		}

		public function finalizaCompra($id_usuario) {
			$retorno = $this->db->query("update carrinho set estado = true where fk_id_usuario = '$id_usuario' ");

			if($this->db->num_rows() > 0) {
				return 1;
			}else {
				return 0;
			}			
		}

		public function adicionaCarrinho($id_usu, $id_prod) {
			$retorno = $this->db->query("insert into carrinho (Fk_id_usuario,
										Fk_id_produto) values ($id_usu, $id_prod)");
			
			if($this->db->affected_rows() > 0) {
				return 1;
			}else {
				return 0;
			}
		}
    }

?>
