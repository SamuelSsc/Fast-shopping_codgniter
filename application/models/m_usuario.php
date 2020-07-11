<?php

 defined('BASEPATH') OR exit('No direct  script access allowed');

 
 class m_usuario extends CI_Model
 {
 	public function cadastrar($usuario, $senha, $tipo){
 		//Instrução que executa a Query no banco de dados
 		$this->db->query("insert into usuarios (user, senha, tipo) values ('$usuario','$senha', '$tipo')");

 		//Verifica se o dado foi inserido
 		if($this->db->affected_rows() > 0){
 			return 1;
 		}else{
 			return 0;
 		}
 	}

 	public function consultar(){
 		$retorno = $this->db->query("select user,senha,tipo,statuss from usuarios");

 		//retorno do select
 		if($retorno->num_rows() > 0){
 			return $retorno;
 		}    
 	}

 	public function consalterar($usuario){
 		//Instrução da query no BD

 		$retorno = $this->db->query("SELECT user, senha FROM usuarios WHERE user = '$usuario'");

 		//retorno do resultado 
 		if ($retorno->num_rows() > 0) {
 			return $retorno; //mandando o tanto de linhas que estão sendo captadas no SELECT
 		}
 	}

 	public function alterar($usuario, $senha, $tipo){
 		$retorno = $this->db->query("update usuarios set senha = '$senha', tipo = '$tipo'
 			WHERE user = '$usuario'");
 		if ($this->db->affected_rows() > 0) {
 			return 1;
 		} else{
 			return 0;
 		}
 	}

 	public function desativar($usuario){
 		$retorno = $this->db->query("update usuarios set statuss ='D' where user = '$usuario' ");
 		if ($this->db->affected_rows() > 0) {
 			return 1;
 		}else{
 			return 0;
 		}
 	}
 	public function verusu($usuario){
		$retorno = $this->db->query("SELECT * FROM usuarios WHERE user = '$usuario'");

		if($this->db->affected_rows() > 0){
			return 1;
		} else{
			return 0;
		}
	}
 }