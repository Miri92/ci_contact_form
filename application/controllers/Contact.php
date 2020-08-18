<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$this->load->helper('url');

		$this->load->view('contact/form');
	}

	public function store(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]',
			array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('message', 'Message', 'required|min_length[6]',
			array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('email', 'Email', 'required|min_length[6]',
			array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[6]',
			array('required' => 'You must provide a %s.'));

		header('Content-Type: application/json');

		if ($this->form_validation->run() == FALSE)
		{

			$arr = array(
				'message' => validation_errors(),
				'status' => false
			);
			echo json_encode( $arr );
			return;
		}

		$this->load->model('Contact_model');

//		print_r($this->input->post("name"));
//		return;


		$data = array(
			'name' => $this->input->post("name"),
			'email'    => $this->input->post("email"),
			'body'  => $this->input->post("message"),
			'phone'  => $this->input->post("phone")
		);

		$this->Contact_model->insert($data);

		$arr = array(
			'message' => 'success',
			'status' => true
		);

		echo json_encode( $arr );
	}

	public function test(){
		echo 'sada';
		return 'asdas';
	}
}
