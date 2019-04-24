<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato extends CI_Controller {
	
    public function __construct(){
        parent::__construct();
		$this->load->model('candidato_model');
    }	

	public function index()
	{
		$dados['avaliacao'] = $this->candidato_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->candidato_model->listarCurriculo()->result();
		$dados['status'] = $this->candidato_model->listarStatus()->result();
		$dados['cargos'] = $this->candidato_model->listarCargos()->result();
		$this->load->view('template/header');
		$this->load->view('pages/cadastra_candidato', $dados);
		$this->load->view('template/footer');
	}
	
	public function cadastrar()
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
}