<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario_model extends CI_Model{
	
    public function __construct(){
        parent::__construct();
    }
    
	public function buscarFuncionario($id){
        $sql= "SELECT fc.nome, fc.sobrenome, fc.id, fc.email, fc.dt_nascimento, fc.senha, fc.usuario, cg.cargo FROM tb_funcionario fc JOIN tb_cargo cg ON fc.cargo_id = cg.id_cargo WHERE fc.id = ?";
        $result = $this->db->query($sql, $id);
		return $result;
	}
	
}