<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function logarAjax()
	{
		$usuario = $this->input->post('txtUsuario');
		$senha = $this->input->post('txtSenha');

		$this->load->model('M_acesso');

		$retorno = $this->M_acesso->validalogin($usuario, $senha);
		
		if($retorno == 1){
			$_SESSION['usuario'] = $usuario;
		}else{
			unset($_SESSION['usuario']);
		}

		echo $retorno;
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function verificarSessao(){
		$this->load->model('m_acesso');
		$usuario = strtoupper($this->session->userdata('usuario'));
		$retorno = $this->m_acesso->verificarSessao($usuario);

		echo $retorno;
	}

}
?>
