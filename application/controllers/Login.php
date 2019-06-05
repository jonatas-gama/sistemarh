<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function __construct(){                
        parent::__construct();      
        $this->load->model('padrao_model');
    }
	
	public function login(){
		$login = $this->input->post('login');
		$senha = MD5($this->input->post('senha'));
		$gerente  		= $this->padrao_model->selectGerente($login,$senha);
		$supervisor		= $this->padrao_model->selectSupervisor($login,$senha);
		$auxiliar  		= $this->padrao_model->selectAuxiliar($login,$senha);
		$funcionario  	= $this->padrao_model->selectFuncionario($login,$senha);
		
		if($gerente){
			$dadosSessao['funcionario'] = $gerente;
			$dadosSessao['logado'] = TRUE;
			$dadosSessao['msg'] = "";
			$this->session->set_userdata($dadosSessao);
			$data['title'] = "Gerente";
			$this->load->view('template/gerente/header', $data);
			$this->load->view('pages/gerente/relatorios');
			$this->load->view('template/gerente/footer');		
			
		}elseif($supervisor){
			$dadosSessao['funcionario'] = $supervisor;
			$dadosSessao['logado'] = TRUE;
			$dadosSessao['msg'] = "";
			$this->session->set_userdata($dadosSessao);
			$data['title'] = "Supervisor";
			$this->load->view('template/supervisor/header', $data);
			$this->load->view('pages/supervisor/relatorios');
			$this->load->view('template/supervisor/footer');	
			
		}elseif($auxiliar){
			$dadosSessao['funcionario'] = $auxiliar;
			$dadosSessao['logado'] = TRUE;
			$dadosSessao['msg'] = "";
			$this->session->set_userdata($dadosSessao);
			$data['title'] = "Auxiliar";
			$this->load->view('template/auxiliar/header', $data);
			$this->load->view('pages/auxiliar/relatorios');
			$this->load->view('template/auxiliar/footer');
			
		}elseif($funcionario){
			$dadosSessao['funcionario'] = $funcionario;
			$dadosSessao['logado'] = TRUE;
			$dadosSessao['msg'] = "";
			$this->session->set_userdata($dadosSessao);
			$data['title'] = "&Aacute;rea do Colaborador";
			$this->load->view('template/funcionarios/header', $data);
			$this->load->view('pages/funcionarios/index');
			$this->load->view('template/funcionarios/footer');			
		
		}else{
			$dadosSessao['funcionario'] = NULL;
			$dadosSessao['logado'] = FALSE;
			$dadosSessao['msg'] = "UsuÃ?rio ou senha incorreta";
			$this->session->set_userdata($dadosSessao);                
			redirect(base_url("/"));			
		}	
	}

    public function logout(){
        $dadosSessao['cliente'] = NULL;
        $dadosSessao['logado'] = FALSE;
        $this->session->set_userdata($dadosSessao);
        redirect(base_url("/"));
    }    
}

