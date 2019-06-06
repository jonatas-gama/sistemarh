<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Padrao_model extends CI_Model{
	
    public function __construct(){
        parent::__construct();
    }
    
    public function selectGerente($usuario, $senha) {
		/*
        $this->db->select('usuario, senha, nome')->from('tb_gerente');
        $this->db->where(array('usuario' => $usuario, 'senha' => $senha));
        $gerente = $this->db->get()->result();
		return $gerente;	
		*/
		$sql = "SELECT nome from tb_gerente where usuario = ? AND senha = ?";
		$gerente = $this->db->query($sql, array($usuario, $senha));
		return $gerente;	
    }

	public function selectSupervisor($usuario, $senha){
		/*
        $this->db->select('usuario, senha, nome')->from('tb_supervisor');
        $this->db->where(array('usuario' => $usuario, 'senha' => $senha));
        $supervisor = $this->db->get()->result();
		return $supervisor;
		*/
		$sql = "SELECT nome from tb_supervisor where usuario = ? AND senha = ?";
		$supervisor = $this->db->query($sql, array($usuario, $senha));
		return $supervisor;		
	}	
	
	public function selectAuxiliar($usuario, $senha){
		/*
        $this->db->select('usuario, senha, nome')->from('tb_auxiliar');
        $this->db->where(array('usuario' => $usuario, 'senha' => $senha));
        $auxiliar = $this->db->get()->result();
		return $auxiliar;
		*/
		$sql = "SELECT nome from tb_auxiliar where usuario = ? AND senha = ?";
		$auxiliar = $this->db->query($sql, array($usuario, $senha));
		return $auxiliar;		
	}
	
	public function selectFuncionario($usuario, $senha){
		/*	
        $this->db->select('usuario, senha, nome, sobrenome, email, id')->from('tb_funcionario');
        $this->db->where(array('usuario' => $usuario, 'senha' => $senha));
        $funcionario = $this->db->get()->result();
		return $funcionario;
		*/
		$sql = "SELECT usuario, senha, nome, sobrenome, email, id from tb_funcionario where usuario = ? AND senha = ?";
		$funcionario = $this->db->query($sql, array($usuario, $senha));
		return $funcionario;
		
	}	

}