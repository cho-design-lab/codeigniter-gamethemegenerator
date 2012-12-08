<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generator extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	function index(){
		$this->load->model("Noun_model");
		$this->load->model("Verb_model");
		$this->load->model("Chunk_model");
		
		$data['verb1'] = $this->Verb_model->getVerb();
		$data['verb2'] = $this->Verb_model->getVerb();
		$data['noun1'] = $this->Noun_model->getNoun();
		$data['noun2'] = $this->Noun_model->getNoun();
		
		$data['chunk1'] = $this->Chunk_model->getChunk("を");
		$data['chunk2'] = $this->Chunk_model->getChunk("を");
		
		$this->load->view("generator",$data);
	}
}