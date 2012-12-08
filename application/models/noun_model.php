<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noun_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function index(){
		
	}
	
	function getNoun(){
		$sql = 'SELECT * FROM noun AS tbl,(SELECT id FROM noun ORDER BY RAND() LIMIT 0,1) AS random WHERE tbl.id=random.id';
		$query = $this->db->query($sql);
		
		return $query->result();
	}
}