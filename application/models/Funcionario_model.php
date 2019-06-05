<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario_model extends CI_Model{
	
    public function __construct(){
        parent::__construct();
    }
    
	public function buscarFuncionario($id){
		$sql = "SELECT fc.cargo_id, fc.dt_nascimento, fc.email, fc.id, fc.nome, fc.sobrenome, fc.senha, fc.usuario, cg.cargo from tb_funcionario fc INNER JOIN tb_cargo cg ON fc.cargo_id = cg.id_cargo WHERE id = ?";
		$result = $this->db->query($sql, $id);
		return $result;		
	}
	
}