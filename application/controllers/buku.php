<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('buku_model');
	}

	public function index()
	{
		$data['data_buku'] = $this->buku_model->getBook();
		$this->load->view('buku_view', $data);
	}

}

/* End of file buku.php */
/* Location: ./application/controllers/buku.php */