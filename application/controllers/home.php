<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{ 
		//$this->load->view('welcome_message');
		$this->load->model('m_produto');
		$data['produtos']=$this->m_produto->getProdutos();
		//Carregar o cabeçalho (Header)
		$this->load->view('includes/header');
		//Carrega o rodapé da tela (Footer)
		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->model('m_usuario');
		//$usuario=$this->m_usuario->getUsuario();
		$this->load->view('includes/menu');
		$this->load->view('includes/carrousel');
		$this->load->view('index', $data);

		//Busca o produto
		

	}

}
?>
