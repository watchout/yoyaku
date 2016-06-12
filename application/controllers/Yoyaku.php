<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yoyaku extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->library('session','encrypt');
		$this->load->helper(array('form','url','date'));
		$this->output->set_header('Content-Type: text/html; charset=UTF-8');
		$this->load->model('base_model');
	}
	
	public function index(){
	    $data = new stdClass;
	    $data->title    = "予約ページ";
	    
	    $data->test = "testtest";
	    
	    $data->main = $this->load->view('yoyaku/top',$data,TRUE);
	    
	    $this->load->view('master',$data);
	}
	
}