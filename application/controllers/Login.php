<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{ 
		//$this->load->view('welcome_message');

		//Carrgar o cabeçalho (Header)
		$this->load->view('includes/header');
		//Carrega o rodapé da tela (Footer)
		$this->load->view('includes/footer');

		//Carrega o corpo da tela (Body)
		$this->load->view('v_login');

	}

	public function logarAjax()
	{
		$email = $this->input->post('txtEmail');
		$senha = $this->input->post('txtSenha');

		$this->load->model('m_acesso');

		$retorno = $this->m_acesso->validalogin($email, $senha);

    
		if($retorno ==1) {
				$_SESSION['usuario'] = $email;
		}else {
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
