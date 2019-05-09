<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Controller {
	
    public function __construct(){
        parent::__construct();
		//$this->load->modele/funcionarios_model');
    }	
	
	public function index() 
	{
		$this->load->view('template/funcionarios/header');
		$this->load->view('pages/funcionarios/index');
		$this->load->view('template/funcionarios/footer');
    }
    public function vagasAbertas ()
    {
        $this->load->view('template/funcionarios/header');
        $this->load->view('pages/funcionarios/vagasabertas');
        $this->load->view('template/funcionarios/footer');
    }
    public function contraCheques ()
    {
        $this->load->view('template/funcionarios/header');
        $this->load->view('pages/funcionarios/contracheques');
        $this->load->view('template/funcionarios/footer');
    }
    public function ferias ()
    {
        $this->load->view('template/funcionarios/header');
        $this->load->view('pages/funcionarios/ferias');
        $this->load->view('template/funcionarios/footer');
    }
    public function chamado ()
    {
        $this->load->view('template/funcionarios/header');
        $this->load->view('pages/funcionarios/chamado');
        $this->load->view('template/funcionarios/footer');
    }
    public function finalizados ()
    {
        $this->load->view('template/funcionarios/header');
        $this->load->view('pages/funcionarios/finalizados');
        $this->load->view('template/funcionarios/footer');
    }
    public function andamento ()
    {
        $this->load->view('template/funcionarios/header');
        $this->load->view('pages/funcionarios/andamento');
        $this->load->view('template/funcionarios/footer');
    }
    public function logout()
    {
        $dadosSessao['cliente'] = NULL;
        $dadosSessao['logado'] = FALSE;
        $this->session->set_userdata($dadosSessao);
        redirect(base_url("login/logout"));
    }
}