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

		$this->load->model('m_produto');
		$retorno['celulares'] = $this->m_produto->getCelulares();
		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('includes/carrousel');
		$this->load->view('celulares', $retorno);
		

	}

	public function mostrarnoot()
	{

		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->model('m_produto');
		$this->load->view('includes/header');
		$retorno['notebooks'] = $this->m_produto->getNotebooks();
		$this->load->view('includes/menu');
		$this->load->view('includes/carrousel');
		$this->load->view('notebooks', $retorno);

	}

	public function mostraracessorios()
	{

		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->model('m_produto');
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$retorno['acessorios'] = $this->m_produto->getAcessorios();
		$this->load->view('includes/carrousel');
		$this->load->view('acessorios', $retorno);


	}

	public function mostraProdutoId()
	{

		$id = $this->input->get('id');

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

	public function carrinho() {
		
		$email = $this->session->userdata('usuario');
		$this->load->model('m_acesso');
		
		$usuario = $this->m_acesso->capturaUsuarioLogado($email);
		$this->load->model('m_carrinho');
		$retorno['produtosCarrinho'] = $this->m_carrinho->chamaCarrinho($usuario->id_Usuario);
		/*echo '<pre>';
		print_r($usuario);
		echo '</pre>';*/
	

		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		//$this->load->view('includes/carrousel');
		$this->load->view('carrinho', $retorno);
	}

	public function addCarrinho()
	{
		$id_produto = $this->input->get('id');

		$retorno['produtosCarrinho']= [""];
		
			
		$email = $this->session->userdata('usuario');
		$this->load->model('m_acesso');

		$usuario = $this->m_acesso->capturaUsuarioLogado($email);
		$this->load->model('m_carrinho');

		foreach($usuario as $usu) {
			$produtoAdicionadoAoCarrinho = $this->m_carrinho->adicionaCarrinho($usu->id_Usuario, $id_produto);
			$retorno['produtosCarrinho'] = $this->m_carrinho->chamaCarrinho($usu->id_Usuario);
			$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		
	}
	
	$this->load->view('includes/header');
	$this->load->view('includes/menu');
	//$this->load->view('includes/carrousel');
	$this->load->view('carrinho', $retorno);
				

		
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
