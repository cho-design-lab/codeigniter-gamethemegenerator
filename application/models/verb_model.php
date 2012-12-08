<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verb_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function index(){
		
	}
	
	public function getVerb(){
		$sql = 'SELECT * FROM verb AS tbl,(SELECT id FROM verb ORDER BY RAND() LIMIT 0,1) AS random WHERE tbl.id=random.id';
		$query = $this->db->query($sql);
		
		return $query->result();
	}
}
