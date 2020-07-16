<?php

 defined('BASEPATH') OR exit('No direct  script access allowed');

 
 class m_usuario extends CI_Model
 {

	public function getUsuario(){
		$retorno = $this->db->query("select nome from usuario where logado=true");
		if($retorno->num_rows() > 0){
			return $retorno->result();
		}else{
			return "";
		}
	}

 	public function cadastrar($nome, $email, $senha){
		 //Instrução que executa a Query no banco de dados
		 $retorno = $this->db->query("select * from usuario
		 where email = '$email'");

		 if($retorno->num_rows() > 0){
			 return 2;
		 }

 		$this->db->query("insert into usuario (nome, email, senha) values ('$nome','$email', '$senha')");
		
 		//Verifica se o dado foi inserido
 		if($this->db->affected_rows() > 0){
 			return 1;
 		}else{
 			return 0;
 		}
 	}

 	public function consultar(){
 		$retorno = $this->db->query("select user,senha,tipo, case statuss
 																when 'D' then
 																'DESATIVADO'
 																else
 																'ATIVO'
 																end statuss
 																from usuarios");

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

 	public function desativar($email){
 		$retorno = $this->db->query("delete * from usuario where user = '$email'");
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

	public function reativar($usuario){
		$retorno = $this->db->query("update usuarios set statuss = '' where user = '$usuario'");

		if ($this->db->affected_rows() > 0) {
			return 1;
		}else{
			return 0;
		}
	}
 }
