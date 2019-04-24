<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auxiliar extends CI_Controller {
	
    public function __construct(){
        parent::__construct();
		$this->load->model('auxiliar_model');
    }	

	public function index()
	{
		$dados['title'] = "Auxiliar | Relatórios";
		$dados['avaliacao'] = $this->auxiliar_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->auxiliar_model->listarCurriculo()->result();
		$dados['status'] = $this->auxiliar_model->listarStatus()->result();
		$dados['cargos'] = $this->auxiliar_model->listarCargos()->result();
		$this->load->view('template/auxiliar/header', $dados);
		$this->load->view('pages/auxiliar/relatorios', $dados);
		$this->load->view('template/auxiliar/footer');
	}
	
	public function cadastraCandidato()
	{
		$dados['avaliacao'] = $this->auxiliar_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->auxiliar_model->listarCurriculo()->result();
		$dados['status'] = $this->auxiliar_model->listarStatus()->result();
		$dados['cargos'] = $this->auxiliar_model->listarCargos()->result();
		$this->load->view('template/auxiliar/header');
		$this->load->view('pages/auxiliar/cadastra_candidato', $dados);
		$this->load->view('template/auxiliar/footer');
	}
	
	public function cadastrarCandidato()
	{
		$tb_candidato['nome'] = $this->input->post("nome");
		$tb_candidato['sobrenome'] = $this->input->post("sobrenome");
		$tb_candidato['email'] = $this->input->post("email");
		$tb_candidato['telefone'] = $this->input->post("telefone");
		$tb_candidato['id_curriculo'] = $this->input->post("curriculo");
		$tb_candidato['cargo_id'] = $this->input->post("cargo");
		$tb_candidato['dt_processo'] = $this->input->post("data");
		$tb_candidato['observacao'] = $this->input->post("observacao");
		if($this->db->insert('tb_candidato', $tb_candidato)){
			$this->session->set_flashdata('msg-sucesso', "Dados salvos com sucesso.");
		}else{
			$this->session->set_flashdata('msg-erro', "Ocorreu alguma falha, registro n?o foi salvo.");
		}
		redirect(base_url('/auxiliar'));
	}
	
	
	public function visualizaFuncionarios()
	{
		$dados['title'] = "Auxiliar | Visualizar Funcionários";
		$dados['avaliacao'] = $this->auxiliar_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->auxiliar_model->listarCurriculo()->result();
		$dados['status'] = $this->auxiliar_model->listarStatus()->result();
		$dados['cargos'] = $this->auxiliar_model->listarCargos()->result();		
		$dados['funcionarios'] = $this->auxiliar_model->listarFuncionarios()->result();
		$this->load->view('template/auxiliar/header', $dados);
		$this->load->view('pages/auxiliar/visualiza_funcionarios', $dados);
		$this->load->view('template/auxiliar/footer');
	}	
	
	public function processosAgendados()
	{
		$dados['title'] = "Auxiliar | Processos Agendados";
		$dados['agendados'] = $this->auxiliar_model->listarAgendados()->result();
		$this->load->view('template/auxiliar/header', $dados);
		$this->load->view('pages/auxiliar/processos_agendados', $dados);
		$this->load->view('template/auxiliar/footer');
	}	
	
	public function processosRealizados()
	{
		$dados['title'] = "Auxiliar | Processos Realizados";
		$dados['realizados'] = $this->auxiliar_model->listarRealizados()->result();
		$this->load->view('template/auxiliar/header', $dados);
		$this->load->view('pages/auxiliar/processos_realizados', $dados);
		$this->load->view('template/auxiliar/footer');
	}	
	
	public function teste()
	{
		$dados['title'] = "Auxiliar | Relatórios";
		$dados['avaliacao'] = $this->auxiliar_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->auxiliar_model->listarCurriculo()->result();
		$dados['status'] = $this->auxiliar_model->listarStatus()->result();
		$dados['cargos'] = $this->auxiliar_model->listarCargos()->result();
		$this->load->view('pages/teste/header/header');
		$this->load->view('pages/teste/body/bodyindex');
		$this->load->view('pages/teste/footer/footer');
	}
}