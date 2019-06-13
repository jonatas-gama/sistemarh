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
		$tb_candidato['hora'] = $this->input->post("hora");
		if($this->db->insert('tb_candidato', $tb_candidato)){
			$this->session->set_flashdata('msg-sucesso', "Dados salvos com sucesso.");
		}else{
			$this->session->set_flashdata('msg-erro', "Ocorreu alguma falha, registro n?o foi salvo.");
		}
		//echo $this->db->last_query(); //Use para verificar a última consulta executada
        //exit();		
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
		$dados['curriculo'] = $this->auxiliar_model->listarCurriculo()->result();		
		$dados['agendados'] = $this->auxiliar_model->listarAgendados()->result();
		$dados['cargos'] = $this->auxiliar_model->listarCargos()->result();	
		$dados['status'] = $this->auxiliar_model->listarStatus()->result();		
		$this->load->view('template/auxiliar/header', $dados);
		$this->load->view('pages/auxiliar/processos_agendados', $dados);
		$this->load->view('template/auxiliar/footer');
	}	
	
	public function processosRealizados()
	{
		$dados['curriculo'] = $this->auxiliar_model->listarCurriculo()->result();		
		$dados['agendados'] = $this->auxiliar_model->listarAgendados()->result();
		$dados['cargos'] = $this->auxiliar_model->listarCargos()->result();	
		$dados['status'] = $this->auxiliar_model->listarStatus()->result();	
		$dados['title'] = "Auxiliar | Processos Realizados";
		$dados['realizados'] = $this->auxiliar_model->listarRealizados()->result();
		$this->load->view('template/auxiliar/header', $dados);
		$this->load->view('pages/auxiliar/processos_realizados', $dados);
		$this->load->view('template/auxiliar/footer');
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
		$tb_candidato['entrevistador'] = $this->session->userdata('nome');
		$id_funcionario = $this->input->post("id_funcionario");		
		$this->db->where('id_funcionario', $id_funcionario);
		if($this->db->update('tb_candidato', $tb_candidato)){
			$this->session->set_flashdata('msg-sucesso', "Dados atualizados com sucesso.");
		}else{
			$this->session->set_flashdata('msg-erro', "Ocorreu alguma falha, registro n?o foi atualizado.");
		}
		//echo $this->db->last_query(); //Use para verificar a última consulta executada
        //exit();
		redirect(base_url('auxiliar/processosagendados'));		
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

	public function extrairRealizados(){
			$productResult = $this->auxiliar_model->listarRealizados()->result_array();
			if (isset($_POST["export"])) {
				$filename = "Processos_realizados.xls";
				header("Content-Type: application/vnd.ms-excel");
				header("Content-Disposition: attachment; filename=\"$filename\"");
				$isPrintHeader = false;
				if (! empty($productResult)) {
					foreach ($productResult as $row) {
						if (! $isPrintHeader) {
							echo implode("\t", array_keys($row)) . "\n";
							$isPrintHeader = true;
						}
						echo implode("\t", array_values($row)) . "\n";
					}
				}
				exit();
		}
	}
	
	public function extrairAgendados(){
			$productResult = $this->auxiliar_model->listarAgendados()->result_array();
			if (isset($_POST["export"])) {
				$filename = "Processos_realizados.xls";
				header("Content-Type: application/vnd.ms-excel");
				header("Content-Disposition: attachment; filename=\"$filename\"");
				$isPrintHeader = false;
				if (! empty($productResult)) {
					foreach ($productResult as $row) {
						if (! $isPrintHeader) {
							echo implode("\t", array_keys($row)) . "\n";
							$isPrintHeader = true;
						}
						echo implode("\t", array_values($row)) . "\n";
					}
				}
				exit();
		}
	}	
}