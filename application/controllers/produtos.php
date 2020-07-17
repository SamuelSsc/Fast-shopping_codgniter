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

	public function mostraracessorios($id)
	{

		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('includes/carrousel');
		$this->load->view('acessorios');

	}

	public function mostraProdutoId()
	{

		$id = $this->input->post('id');

		$this->load->model('m_produto');

		$verifica = $this->m_produto->VerificaSeProdutoExistePorId($id);

		if($verifica == 1) {
			$retorno['produto'] = $this->m_produto->getProdutoId($id);
			$this->load->view('includes/header');
			$this->load->view('includes/footer');
			//Carrega o corpo da tela (Body)
			$this->load->view('includes/menu');
			$this->load->view('produto', $retorno);
		}else{
			$this->load->view('includes/header');
			$this->load->view('includes/footer');
			//Carrega o corpo da tela (Body)
			$this->load->view('includes/menu');
			$this->load->view('404NotFound');
		}



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

}
?>
