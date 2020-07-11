<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
	{ 
		//$this->load->view('welcome_message');

		//Carrgar o cabeçalho (Header)
		$this->load->view('includes/header');
		//Carrega o rodapé da tela (Footer)
		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->view('includes/menu');
		$this->load->view('index');

	}

	public function mostraProduto($id) {
		$this->load->model('m_produto');

		$retorno = $this->m_produto->get($id);
	}

}
?>
