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
		redirect(base_url('/gerente'));
	}
	
	public function cadastraFuncionario()
	{
		$dados['title'] = "Gerente | Visualizar Funcionários";
		$dados['avaliacao'] = $this->gerente_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->gerente_model->listarCurriculo()->result();
		$dados['status'] = $this->gerente_model->listarStatus()->result();
		$dados['cargos'] = $this->gerente_model->listarCargos()->result();		
		$dados['funcionarios'] = $this->gerente_model->listarFuncionarios()->result();
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
		$tb_funcionario['usuario'] = $this->input->post("usuario");
		$tb_funcionario['senha'] = md5($this->input->post("senha"));
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

	public function atualizarCandidato(){
		$tb_candidato['nome'] = $this->input->post("nome");
		$tb_candidato['sobrenome'] = $this->input->post("sobrenome");
		$tb_candidato['email'] = $this->input->post("email");
		$tb_candidato['telefone'] = $this->input->post("telefone");
		$tb_candidato['id_curriculo'] = $this->input->post("curriculo");
		$tb_candidato['cargo_id'] = $this->input->post("cargo");
		$tb_candidato['dt_processo'] = $this->input->post("data");
		$tb_candidato['hora'] = $this->input->post("hora");
		$tb_candidato['observacao'] = $this->input->post("observacao");
		$tb_candidato['id_status'] = $this->input->post("status");
		$tb_candidato['motivo'] = $this->input->post("motivo");
		$id_funcionario = $this->input->post("id_funcionario");
		$this->db->where('id_funcionario', $id_funcionario);
		if($this->db->update('tb_candidato', $tb_candidato)){
			$this->session->set_flashdata('msg-sucesso', "Dados atualizados com sucesso.");
		}else{
			$this->session->set_flashdata('msg-erro', "Ocorreu alguma falha, registro n?o foi atualizado.");
		}
		//echo $this->db->last_query(); //Use para verificar a última consulta executada
        //exit();
		redirect(base_url('gerente/processosagendados'));		
	}
	
	public function buscarProcessoAgendado($id){
		$processo = $this->gerente_model->buscarProcessoAgendado($id)->result();
		echo json_encode($processo);
	}	
	
	public function buscarProcessoRealizado($id){
		$realizado = $this->gerente_model->buscarProcessoRealizado($id)->result();
		echo json_encode($realizado);
	}
	
	public function buscarFuncionario($id){
		$realizado = $this->gerente_model->buscarFuncionario($id)->result();
		echo json_encode($realizado);
	}
}