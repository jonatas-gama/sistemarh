<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Padrao_model extends CI_Model{
	
    public function __construct(){
        parent::__construct();
    }
    
    public function selectGerente($usuario, $senha) {
        $this->db->select('usuario, senha, nome')->from('tb_gerente');
        $this->db->where(array('usuario' => $usuario, 'senha' => $senha));
        $gerente = $this->db->get()->result();
		return $gerente;	
    }

	public function selectSupervisor($usuario, $senha){
        $this->db->select('usuario, senha, nome')->from('tb_supervisor');
        $this->db->where(array('usuario' => $usuario, 'senha' => $senha));
        $supervisor = $this->db->get()->result();
		return $supervisor;
	}	
	
	public function selectAuxiliar($usuario, $senha){
        $this->db->select('usuario, senha, nome')->from('tb_auxiliar');
        $this->db->where(array('usuario' => $usuario, 'senha' => $senha));
        $auxiliar = $this->db->get()->result();
		return $auxiliar;
	}
	
	public function selectFuncionario($usuario, $senha){
        $this->db->select('usuario, senha, nome')->from('tb_funcionario');
        $this->db->where(array('usuario' => $usuario, 'senha' => $senha));
        $auxiliar = $this->db->get()->result();
		return $auxiliar;
	}	

}