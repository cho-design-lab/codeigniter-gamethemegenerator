<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chunk_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function index(){
		
	}
	
	public function getChunk($particle="は"){
		$sql = 'SELECT * FROM chunk AS tbl,(SELECT id FROM chunk where particle LIKE '.'"'.$particle.'"'.' ORDER BY RAND() LIMIT 0,1) AS random WHERE tbl.id=random.id';
		$query = $this->db->query($sql);
		
		return $query->result();
	}
}
