<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{
	
	public function index()	{
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('v_usuario');
		$this->load->view('includes/footer');
	}
	public function listar(){
		$this->load->model('m_usuario');

		//solicitando a execução do método consultar
		$retorno = $this->m_usuario->consultar();

		echo json_encode($retorno->result());
	}
	public function cadastrar(){
		//carregando as variavéis usando input
		$usuario = $this->input->post('usuario');
		$senha = $this->input->post('senha');
		$tipo = $this->input->post('cmb-tipo');

		$this->load->model('m_usuario');

		$retorno = $this->m_usuario->cadastrar($usuario, $senha, $tipo);

		echo $retorno;
	}
	public function consalterar(){
		//carregando a variável que vem do post
		$usuario = $this->input->post('usuario');
		//Instanciando a model
		$this->load->model('m_usuario');

		$retorno = $this->m_usuario->consalterar($usuario);

		echo json_encode($retorno->result());
	}

	public function alterar(){
		$usuario = $this->input->post('usuario');
		$senha =  $this->input->post('senha');
		$tipo = $this->input->post('tipo');

		$this->load->model('m_usuario');

		$retorno = $this->m_usuario->alterar($usuario, $senha, $tipo);

		echo $retorno;

	}

	public function desativar(){
		$usuario = $this->input->post('usuario');

		$this->load->model('m_usuario');

		$retorno = $this->m_usuario->desativar($usuario);

		echo $retorno;
	}

	public function verusu(){
		$usuario = $this->input->post('usuario');

		$this->load->model('m_usuario');

		$retorno = $this->m_usuario->verusu($usuario);

		echo $retorno;
	}
}
?>