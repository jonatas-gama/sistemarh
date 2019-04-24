<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato_model extends CI_Model{
	
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

}