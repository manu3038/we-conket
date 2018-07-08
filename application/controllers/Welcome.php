<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('header');
		$this->load->view('slideshow');
		$this->load->view('services');
		$this->load->view('partners');
		$this->load->view('gallery');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function savingData()
	{
		$data = array('name' => $this->input->post('name'),
					'phone_no' => $this->input->post('phone'),
					'email' => $this->input->post('email'),
					'query' => $this->input->post('query')
				);
		$this->db->insert('customer',$data);
		redirect("index.php/welcome");
	}					
	
}
