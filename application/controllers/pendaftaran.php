<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		//Do your magic here

	}

	public function index()
	{
		//menentukan nama view yang akan di tampilkan
		$data['main_view'] = 'pendaftaran_view';

		//load view
		$this->load->view('template', $data);
	}
}

/* End of file pendaftaran.php */
/* Location: ./application/config/pendaftaran.php */