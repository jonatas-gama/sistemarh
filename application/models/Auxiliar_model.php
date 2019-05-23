<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auxiliar_model extends CI_Model{
	
    public function __construct(){
        parent::__construct();
    }
    
    public function listarAvaliacao() {
        $sql = "SELECT * FROM tb_avaliacao";
        $result = $this->db->query($sql);       
		return $result;	
    }

	public function listarCurriculo(){
        $sql= "SELECT * FROM tb_curriculo";
        $result = $this->db->query($sql);
		return $result;
	}	
	
	public function listarStatus(){
        $sql= "SELECT * FROM tb_status";
        $result = $this->db->query($sql);
		return $result;
	}
	
	public function listarCargos(){
        $sql= "SELECT * FROM tb_cargo";
        $result = $this->db->query($sql);
		return $result;
	}	

	public function listarFuncionarios(){
        $sql= "SELECT CONCAT(fc.nome,' ',fc.sobrenome) as nome, fc.id, fc.email, fc.dt_nascimento, fc.usuario, cg.cargo FROM tb_funcionario fc JOIN tb_cargo cg ON fc.cargo_id = cg.id_cargo";
        $result = $this->db->query($sql);
		return $result;
	}
	
	public function buscarFuncionario($id){
        $sql= "SELECT fc.nome, fc.sobrenome, fc.id, fc.email, fc.dt_nascimento, fc.usuario, cg.cargo FROM tb_funcionario fc JOIN tb_cargo cg ON fc.cargo_id = cg.id_cargo WHERE fc.id = ?";
        $result = $this->db->query($sql, $id);
		return $result;
	}	

	public function listarAgendados(){
        $sql= "SELECT cd.id_funcionario as id, cd.nome, cd.email, cv.canal, cd.telefone, cg.cargo, SUBSTR(cd.dt_processo, 1, 10) as data, SUBSTR(cd.dt_processo, 12, 6) as hora FROM tb_candidato cd INNER JOIN tb_cargo cg ON cd.cargo_id = cg.id_cargo INNER JOIN tb_curriculo cv ON cd.id_curriculo = cv.id_curriculo WHERE dt_processo > now()";
        $result = $this->db->query($sql);
		return $result;
	}	

	public function listarRealizados(){
        $sql= "SELECT cd.id_funcionario as id, cd.nome, cd.telefone, cg.cargo, SUBSTR(cd.dt_processo, 1, 10) as data, st.status, cd.observacao FROM tb_candidato cd INNER JOIN tb_cargo cg ON cd.cargo_id = cg.id_cargo INNER JOIN tb_status st ON cd.id_status = st.id_status WHERE dt_processo < now()";
        $result = $this->db->query($sql);
		return $result;
	}
	
	public function buscarProcessoAgendado($id){
        $sql= "SELECT cd.id_funcionario as id, cd.nome, cd.id_status as status, cd.sobrenome, cd.email, cd.observacao, cv.canal, cd.telefone, cg.cargo, SUBSTR(cd.dt_processo, 1, 10) as data, SUBSTR(cd.dt_processo, 12, 6) as hora FROM tb_candidato cd INNER JOIN tb_cargo cg ON cd.cargo_id = cg.id_cargo INNER JOIN tb_curriculo cv ON cd.id_curriculo = cv.id_curriculo WHERE dt_processo > now() AND cd.id_funcionario = ?";
        $result = $this->db->query($sql, $id);
		return $result;
	}
	
	public function buscarProcessoRealizado($id){
        $sql= "SELECT cd.id_funcionario as id, cd.nome, cd.sobrenome, cd.id_status as status, cd.email, cd.telefone, cg.cargo, SUBSTR(cd.dt_processo, 1, 10) as data, st.status as st, cd.observacao FROM tb_candidato cd INNER JOIN tb_cargo cg ON cd.cargo_id = cg.id_cargo INNER JOIN tb_status st ON cd.id_status = st.id_status WHERE dt_processo < now() AND cd.id_funcionario = ?";
        $result = $this->db->query($sql, $id);
		return $result;		
	}
}