<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerente extends CI_Controller {
	
    public function __construct(){
        parent::__construct();
		$this->load->model('gerente_model');
    }	
	
	public function index() 
	{	
		$dados['avaliacao'] = $this->gerente_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->gerente_model->listarCurriculo()->result();
		$dados['status'] = $this->gerente_model->listarStatus()->result();
		$dados['cargos'] = $this->gerente_model->listarCargos()->result();		
		$dados['funcionarios'] = $this->gerente_model->listarFuncionarios()->result();
		$dados['title'] = "Gerente | Relatorios";
		$this->load->view('template/gerente/header', $dados);
		$this->load->view('pages/gerente/relatorios', $dados);
		$this->load->view('template/gerente/footer');
	}
	public function cadastraCandidato()
	{
		$dados['avaliacao'] = $this->gerente_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->gerente_model->listarCurriculo()->result();
		$dados['status'] = $this->gerente_model->listarStatus()->result();
		$dados['cargos'] = $this->gerente_model->listarCargos()->result();		
		$this->load->view('template/gerente/header');
		$this->load->view('pages/gerente/cadastra_candidato', $dados);
		$this->load->view('template/gerente/footer');
	}
	
	public function cadastrarCandidato()
	{
		$tb_candidato['nome'] = $this->input->post("inputNome");
		$tb_candidato['sobrenome'] = $this->input->post("inputSobreNome");
		$tb_candidato['email'] = $this->input->post("inputEmail");
		$tb_candidato['telefone'] = $this->input->post("inputTel");
		$tb_candidato['id_avaliacao'] = $this->input->post("inputAvaliacao");
		$tb_candidato['id_curriculo'] = $this->input->post("inputCurriculo");
		$tb_candidato['id_status'] = $this->input->post("inputStatus");
		$tb_candidato['cargo_id'] = $this->input->post("cargo_id");
		if($this->db->insert('tb_candidato', $tb_candidato)){
			$this->session->set_flashdata('msg-sucesso', "Dados salvos com sucesso.");
		}else{
			$this->session->set_flashdata('msg-erro', "Ocorreu alguma falha, registro n?o foi salvo.");
		}
		redirect(base_url('/'));
	}
	
	public function cadastraFuncionario()
	{
		$this->load->view('template/gerente/header');
		$this->load->view('pages/gerente/cadastra_funcionario', $dados);
		$this->load->view('template/gerente/footer');
	}
	
	public function cadastrarUsuario()
	{
		$tb_funcionario['nome'] = $this->input->post("nome");
		$tb_funcionario['sobrenome'] = $this->input->post("sobrenome");
		$tb_funcionario['email'] = $this->input->post("email");
		$tb_funcionario['dt_nascimento'] = $this->input->post("dt_nascimento");
		$tb_funcionario['cargo_id'] = $this->input->post("cargo");
		if($this->db->insert('tb_funcionario', $tb_funcionario)){
			$this->session->set_flashdata('msg-sucesso', "Dados salvos com sucesso.");
		}else{
			$this->session->set_flashdata('msg-erro', "Ocorreu alguma falha, registro n?o foi salvo.");
		}
		redirect(base_url('gerente'));
	}	
	public function processosAgendados()
	{	
		$dados['avaliacao'] = $this->gerente_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->gerente_model->listarCurriculo()->result();
		$dados['status'] = $this->gerente_model->listarStatus()->result();
		$dados['cargos'] = $this->gerente_model->listarCargos()->result();		
		$dados['funcionarios'] = $this->gerente_model->listarFuncionarios()->result();
		$dados['title'] = "Gerente | Processos Agendados";
		$dados['agendados'] = $this->gerente_model->listarAgendados()->result();
		$this->load->view('template/gerente/header', $dados);
		$this->load->view('pages/gerente/processos_agendados', $dados);
		$this->load->view('template/gerente/footer');
	}	
	public function processosRealizados()
	{
		$dados['avaliacao'] = $this->gerente_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->gerente_model->listarCurriculo()->result();
		$dados['status'] = $this->gerente_model->listarStatus()->result();
		$dados['cargos'] = $this->gerente_model->listarCargos()->result();		
		$dados['funcionarios'] = $this->gerente_model->listarFuncionarios()->result();
		$dados['title'] = "Gerente | Processos Realizados";
		$dados['realizados'] = $this->gerente_model->listarRealizados()->result();
		$this->load->view('template/gerente/header', $dados);
		$this->load->view('pages/gerente/processos_realizados', $dados);
		$this->load->view('template/gerente/footer');
	}
	public function visualizaFuncionarios()
	{
		$dados['title'] = "Gerente | Visualizar Funcionários";
		$dados['avaliacao'] = $this->gerente_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->gerente_model->listarCurriculo()->result();
		$dados['status'] = $this->gerente_model->listarStatus()->result();
		$dados['cargos'] = $this->gerente_model->listarCargos()->result();		
		$dados['funcionarios'] = $this->gerente_model->listarFuncionarios()->result();
		$this->load->view('template/gerente/header', $dados);
		$this->load->view('pages/gerente/visualiza_funcionarios', $dados);
		$this->load->view('template/gerente/footer');
	}

	public function buscarProcessoAgendado($id){
		$processo = $this->auxiliar_model->buscarProcessoAgendado($id)->result();
		echo json_encode($processo);
	}	
	
	public function buscarProcessoRealizado($id){
		$realizado = $this->auxiliar_model->buscarProcessoRealizado($id)->result();
		echo json_encode($realizado);
	}
	
	public function buscarFuncionario($id){
		$realizado = $this->auxiliar_model->buscarFuncionario($id)->result();
		echo json_encode($realizado);
	}
}