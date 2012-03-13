<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends CI_Controller{

	public function __construct(){
		parent::__construct();		
	}

	public function index(){
		$this->load->spark('amazon-sdk/0.1.1');
		$s3 = $this->awslib->get_s3();
		$result = $s3->list_buckets();
		echo '<pre>' . print_r($result, TRUE) . '</pre>';
	}

}
