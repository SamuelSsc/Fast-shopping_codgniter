<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index()
	{ 
		//$this->load->view('welcome_message');

		//Carrgar o cabeçalho (Header)
		$this->load->view('includes/header');
		//Carrega o rodapé da tela (Footer)
		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->view('includes/menu');
		$this->load->view('v_usuario');

	}

	public function cadastrar()
	{
		//Carrgar o cabeçalho (Header)
		$this->load->view('includes/header');
		//Carrega o rodapé da tela (Footer)
		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->view('v_cadastro');
	}

	public function cadastrarUser() {
		$nome = $this->input->post('nome');
		$email = $this->input->post('email');
		$senha = $this->input->post md5('senha');

		$this->load->model('m_usuario');

		$retorno = $this->m_usuario->cadastrar($nome, $email, $senha);

		echo $retorno;
	}

}
?>
