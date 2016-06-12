<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
	 public function __construct() {
		parent::__construct();
		
		$this->load->library('session','encrypt');
		$this->load->helper(array('form','url','date'));
		$this->output->set_header('Content-Type: text/html; charset=UTF-8');
		$this->load->model('base_model');
	}
	
	public function index()
	{
	    echo 'テスト';
	    $this->load->helper('url');
	    $this->load->view('welcome_message');
	}
	
	public function get_post($test=''){
	    //echo $test;
	    
	    //$post_data = new stdClass;
	    $update	= new stdClass;
	    
	    if($test){
		$author = "テスト";
		$text = "テストテストテストテスト";
	    } else {
	        $author = $this->input->post('author');
		$text = $this->input->post('text');
	    }
	    
	    if($author && $text){
		$update->name = $author;
		$update->text = $text;
		$this->base_model->update('test','1',$update);
	    }
	    $echo_data = $this->base_model->select('test','1');
	    
	    $send_data[0] = array(
		'author'    => $echo_data->name,
		'text'	    => $echo_data->text
	    );
	    //$data->json = $echo_data->text;
	    //$this->output->set_content_type('application/json')->set_output(json_encode($data->json));
	    echo json_encode($send_data);
	}
}
