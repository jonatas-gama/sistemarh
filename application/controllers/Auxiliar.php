<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auxiliar extends CI_Controller {
	
    public function __construct(){
        parent::__construct();
		$this->load->model('auxiliar_model');
		verificaSessao($this->session->userdata('nome'));
		$this->load->library('pagination');
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
			$this->session->set_flashdata('msg-sucesso', "Candidato cadastrado com sucesso.");
			$id += $this->db->insert_id();
			$config['file_name'] = $id;
			$config['upload_path'] = './uploads/';
			$config['file_ext_tolower'] = true;
			$config['allowed_types'] =	'pdf|doc|docx';
			$config['max_size']	= 0;
			$this->upload->initialize($config);		
			
			if($this->upload->do_upload("curriculo_upload")){
				$this->session->set_flashdata('msg-sucesso-curriculo', 'Currículo salvo com sucesso.');
			}else{
				$this->session->set_flashdata('msg-erro', 'Não foi possível salvar o currículo: '.$this->upload->display_errors());
			}			
		}else{
			$this->session->set_flashdata('msg-erro', "Ocorreu alguma falha, registro nao foi salvo.");
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
		$dados['status'] = $this->auxiliar_model->listarStatus()->result();
		$dados['curriculo'] = $this->auxiliar_model->listarCurriculo()->result();		
		$dados['agendados'] = $this->auxiliar_model->listarAgendados()->result();
		$dados['cargos'] = $this->auxiliar_model->listarCargos()->result();
		$dados['title'] = "Auxiliar | Processos Agendados";
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

	public function processosReprovados()
	{
		
		$dados['curriculo'] = $this->auxiliar_model->listarCurriculo()->result();		
		$dados['agendados'] = $this->auxiliar_model->listarAgendados()->result();
		$dados['cargos'] = $this->auxiliar_model->listarCargos()->result();	
		$dados['status'] = $this->auxiliar_model->listarStatus()->result();	
		$dados['title'] = "Auxiliar | Reprovados";
		//$dados['realizados'] = $this->auxiliar_model->listarReprovados()->result();
		$this->load->view('template/auxiliar/header', $dados);
		$this->load->view('pages/auxiliar/processos_reprovados', $dados);
		$this->load->view('template/auxiliar/footer');
	}

	public function processosAprovados()
	{
		
		$dados['curriculo'] = $this->auxiliar_model->listarCurriculo()->result();		
		$dados['agendados'] = $this->auxiliar_model->listarAgendados()->result();
		$dados['cargos'] = $this->auxiliar_model->listarCargos()->result();	
		$dados['status'] = $this->auxiliar_model->listarStatus()->result();	
		$dados['title'] = "Auxiliar | Aprovados";
		//$dados['realizados'] = $this->auxiliar_model->listarAprovados()->result();
		$this->load->view('template/auxiliar/header', $dados);
		$this->load->view('pages/auxiliar/processos_aprovados', $dados);
		$this->load->view('template/auxiliar/footer');
	}

	public function extrairAprovados(){
		$productResult = $this->auxiliar_model->listarAprovados()->result_array();
		if (isset($_POST["export"])) {
			$filename = "Processos_aprovados.xls";
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


	public function extrairReprovados(){
		$productResult = $this->auxiliar_model->listarReprovados()->result_array();
		if (isset($_POST["export"])) {
			$filename = "Processos_reprovados.xls";
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

	public function paginacaoReprovados($rowno=0){
 
        $rowperpage = 5;
 
        if($rowno != 0){
          $rowno = ($rowno-1) * $rowperpage;
        }
		
        $sql= "SELECT cd.id_funcionario as id, cd.nome, cd.telefone, cg.cargo, cd.dt_processo as data, st.status, cd.observacao FROM tb_candidato cd INNER JOIN tb_cargo cg ON cd.cargo_id = cg.id_cargo INNER JOIN tb_status st ON cd.id_status = st.id_status WHERE cd.id_status IN('2','3') AND DATEDIFF(str_to_date(dt_processo, '%d/%m/%Y'), date_format(now(), '%Y-%m-%d')) < 1 ORDER BY str_to_date(dt_processo, '%d/%m/%Y') ASC";
        $result = $this->db->query($sql);		
        $allcount = $result->num_rows();
 
        $this->db->limit($rowperpage, $rowno);
		$this->db->select("tb_candidato.id_funcionario as `id`, tb_candidato.nome, tb_candidato.observacao, tb_candidato.telefone, tb_cargo.cargo, tb_candidato.dt_processo as `data`, tb_status.status");
		$this->db->from('tb_candidato');
		$this->db->join('tb_cargo', 'tb_candidato.cargo_id = tb_cargo.id_cargo');
		$this->db->join('tb_status', 'tb_status.id_status = tb_candidato.id_status');
		$this->db->where('tb_candidato.id_status =', '2');
		$this->db->or_where('tb_candidato.id_status =', '3');	
		$this->db->where('DATEDIFF(str_to_date(dt_processo, "%d/%m/%Y"), date_format(now(), "%Y-%m-%d")) <', '1');
		$this->db->order_by('str_to_date(dt_processo, "%d/%m/%Y")');
		$query = $this->db->get();
		$users_record = $query->result_array();
  
        $config['base_url'] = base_url().'auxiliar/paginacaoReprovados';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;
 
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] 	= '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] 	= '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']  	= '</span></li>';
 
        $this->pagination->initialize($config);
 
        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;
 
        echo json_encode($data);
  }	

  public function paginacaoAprovados($rowno=0){
 
	$rowperpage = 5;

	if($rowno != 0){
	  $rowno = ($rowno-1) * $rowperpage;
	}
	
	$sql= "SELECT cd.id_funcionario as id, cd.nome, cd.telefone, cg.cargo, cd.dt_processo as data, st.status, cd.observacao FROM tb_candidato cd INNER JOIN tb_cargo cg ON cd.cargo_id = cg.id_cargo INNER JOIN tb_status st ON cd.id_status = st.id_status WHERE cd.id_status = 1 AND DATEDIFF(str_to_date(dt_processo, '%d/%m/%Y'), date_format(now(), '%Y-%m-%d')) < 1 ORDER BY str_to_date(dt_processo, '%d/%m/%Y') ASC";
	$result = $this->db->query($sql);		
	$allcount = $result->num_rows();

	$this->db->limit($rowperpage, $rowno);
	$this->db->select("tb_candidato.id_funcionario as `id`, tb_candidato.nome, tb_candidato.observacao, tb_candidato.telefone, tb_cargo.cargo, tb_candidato.dt_processo as `data`, tb_status.status");
	$this->db->from('tb_candidato');
	$this->db->join('tb_cargo', 'tb_candidato.cargo_id = tb_cargo.id_cargo');
	$this->db->join('tb_status', 'tb_status.id_status = tb_candidato.id_status');
	$this->db->where('tb_candidato.id_status =', '1');	
	$this->db->where('DATEDIFF(str_to_date(dt_processo, "%d/%m/%Y"), date_format(now(), "%Y-%m-%d")) <', '1');
	$this->db->order_by('str_to_date(dt_processo, "%d/%m/%Y")');
	$query = $this->db->get();
	$users_record = $query->result_array();

	$config['base_url'] = base_url().'auxiliar/paginacaoAprovados';
	$config['use_page_numbers'] = TRUE;
	$config['total_rows'] = $allcount;
	$config['per_page'] = $rowperpage;

	$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
	$config['full_tag_close']   = '</ul></nav></div>';
	$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	$config['num_tag_close']    = '</span></li>';
	$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
	$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	$config['prev_tag_close'] 	= '</span></li>';
	$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	$config['first_tag_close'] 	= '</span></li>';
	$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	$config['last_tag_close']  	= '</span></li>';

	$this->pagination->initialize($config);

	$data['pagination'] = $this->pagination->create_links();
	$data['result'] = $users_record;
	$data['row'] = $rowno;

	echo json_encode($data);
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
	//atualização feita em 12/08
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

	public function uploadCurriculo(){
		$id = $this->input->post('id_funcionario_busca');
		$config['file_name'] = $id;
		$config['upload_path'] = './uploads/';
		$config['file_ext_tolower'] = true;
		$config['allowed_types'] =	'pdf|doc|docx';
		$config['max_size']	= 0;
		$this->upload->initialize($config);		
		
		if($this->upload->do_upload("curriculo")){
			$this->session->set_flashdata('msg-sucesso', 'Currículo salvo com sucesso.');
			redirect(base_url('/auxiliar'));
		}else{
			$this->session->set_flashdata('msg-erro', 'Não foi possível salvar o currículo: '.$this->upload->display_errors());
			redirect(base_url('/auxiliar'));
			}		
	}	
	
	public function baixarCurriculo(){
		$id = $this->input->post('id_funcionario_download');
		force_download("./uploads/$id.pdf", NULL, TRUE);
	}

	public function buscarCandidato(){
		$pessoa = $this->input->post('pessoa');
		$dados['title'] 	= "Auxiliar | Consulta" ;
		$dados['curriculo'] = $this->auxiliar_model->listarCurriculo()->result();		
		$dados['agendados'] = $this->auxiliar_model->listarAgendados()->result();
		$dados['cargos'] = $this->auxiliar_model->listarCargos()->result();	
		$dados['status'] = $this->auxiliar_model->listarStatus()->result();		
		$dados['pessoas'] 	= $this->auxiliar_model->buscarCandidato($pessoa)->result();
		$this->load->view('template/auxiliar/header', $dados);
		$this->load->view('pages/auxiliar/busca_candidato', $dados);
		$this->load->view('template/auxiliar/footer');		

	}

	public function buscarFuncionarioID($id){
		$realizado = $this->auxiliar_model->buscarFuncionarioID($id)->result();
		echo json_encode($realizado);
	}	
	
	public function extrairAgendados(){
			$productResult = $this->auxiliar_model->listarAgendados()->result_array();
			if (isset($_POST["export"])) {
				$filename = "Processos_agendados.xls";
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