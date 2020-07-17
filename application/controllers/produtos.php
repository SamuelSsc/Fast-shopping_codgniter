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
	
		//csCarrega o corpo da tela (Body)sa
		$this->load->view('includes/menu');
		$this->load->view('includes/carrousel');	
		$this->load->view('index');

	}

	public function mostrarcelular()
	{

		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('includes/carrousel');
		$this->load->view('celulares');

	}

	public function mostrarnoot()
	{

		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('includes/carrousel');
		$this->load->view('notebooks');

	}

	public function mostraracessorios()
	{

		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('includes/carrousel');
		$this->load->view('acessorios');

	}

	public function odyssei()
	{

		$this->load->view('includes/footer');
		//$this->load->model('m_produto/detalhesprod');
		//Carrega o corpo da tela (Body)
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('odyssei');

	}

	public function carrinho()
	{

		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		//$this->load->view('includes/carrousel');
		$this->load->view('carrinho');
	}

	public function comprar()
	{

		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('comprar');
	}

	public function sobre()
	{

		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('sobre');

	}

	

	public function mostraProduto($id) {
	$this->load->model('m_produto');
	$retorno = $this->m_produto->get($id);
	}
	

}
?>
