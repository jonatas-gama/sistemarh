<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gerente extends CI_Controller {
	
    public function __construct(){
        parent::__construct();
		$this->load->model('gerente_model');
		verificaSessao($this->session->userdata('nome'));
		$this->load->library('pagination');
    }	
	
	public function index() 
	{	
		$dados['title'] = "Gerente | Relatórios";
		$dados['avaliacao'] = $this->gerente_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->gerente_model->listarCurriculo()->result();
		$dados['status'] = $this->gerente_model->listarStatus()->result();
		$dados['cargos'] = $this->gerente_model->listarCargos()->result();
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
		$tb_funcionario['cargo_id'] = $this->input->post("cargo");
		if($this->db->insert('tb_funcionario', $tb_funcionario)){
			$this->session->set_flashdata('msg-sucesso', "Dados salvos com sucesso.");
		}else{
			$this->session->set_flashdata('msg-erro', "Ocorreu alguma falha, registro n?o foi salvo.");
		}
		redirect(base_url('gerente'));
	}

	public function processosReprovados()
	{
		
		$dados['curriculo'] = $this->gerente_model->listarCurriculo()->result();		
		$dados['agendados'] = $this->gerente_model->listarAgendados()->result();
		$dados['cargos'] = $this->gerente_model->listarCargos()->result();	
		$dados['status'] = $this->gerente_model->listarStatus()->result();	
		$dados['title'] = "Gerente | Reprovados";
		$dados['realizados'] = $this->gerente_model->listarReprovados()->result();
		$this->load->view('template/gerente/header', $dados);
		$this->load->view('pages/gerente/processos_reprovados', $dados);
		$this->load->view('template/gerente/footer');
	}

	public function processosAprovados()
	{
		
		$dados['curriculo'] = $this->gerente_model->listarCurriculo()->result();		
		$dados['agendados'] = $this->gerente_model->listarAgendados()->result();
		$dados['cargos'] = $this->gerente_model->listarCargos()->result();	
		$dados['status'] = $this->gerente_model->listarStatus()->result();	
		$dados['title'] = "Gerente | Aprovados";
		//$dados['realizados'] = $this->gerente_model->listarAprovados()->result();
		$this->load->view('template/gerente/header', $dados);
		$this->load->view('pages/gerente/processos_aprovados', $dados);
		$this->load->view('template/gerente/footer');
	}

	public function processosAgendados()
	{	
		$dados['title'] = "Gerente | Processos Agendados";
		$dados['status'] = $this->gerente_model->listarStatus()->result();
		$dados['curriculo'] = $this->gerente_model->listarCurriculo()->result();		
		$dados['agendados'] = $this->gerente_model->listarAgendados()->result();
		$dados['cargos'] = $this->gerente_model->listarCargos()->result();
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
		$tb_funcionario['usuario'] = $this->input->post("usuario");
		$tb_funcionario['senha'] = md5($this->input->post("senha"));
		$this->load->view('template/gerente/header', $dados);
		$this->load->view('pages/gerente/visualiza_funcionarios', $dados);
		$this->load->view('template/gerente/footer');
	}	

	public function buscarCandidato(){
		$pessoa = $this->input->post('pessoa');
		$dados['title'] 	= "Gerente | Consulta" ;
		$dados['curriculo'] = $this->gerente_model->listarCurriculo()->result();		
		$dados['agendados'] = $this->gerente_model->listarAgendados()->result();
		$dados['cargos'] = $this->gerente_model->listarCargos()->result();	
		$dados['status'] = $this->gerente_model->listarStatus()->result();		
		$dados['pessoas'] 	= $this->gerente_model->buscarCandidato($pessoa)->result();
		$this->load->view('template/gerente/header', $dados);
		$this->load->view('pages/gerente/busca_candidato', $dados);
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
		redirect(base_url('gerente/processosagendados'));		
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
  
        $config['base_url'] = base_url().'gerente/paginacaoAprovados';
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

	$config['base_url'] = base_url().'gerente/paginacaoReprovados';
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

  public function extrairReprovados(){
	$productResult = $this->gerente_model->listarReprovados()->result_array();
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

	public function extrairAprovados(){
		$productResult = $this->gerente_model->listarAprovados()->result_array();
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
			redirect(base_url('/gerente'));
		}else{
			$this->session->set_flashdata('msg-erro', 'Não foi possível salvar o currículo: '.$this->upload->display_errors());
			redirect(base_url('/gerente'));
			}		
	}	

	public function baixarCurriculo(){
		$id = $this->input->post('id_funcionario_download');
		force_download("./uploads/$id.pdf", NULL, TRUE);
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
	
	public function buscarFuncionarioID($id){
		$realizado = $this->gerente_model->buscarFuncionarioID($id)->result();
		echo json_encode($realizado);
	}		
}