<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
	}	

	public function data_siswa()
	{
		$data['main_view'] = 'data_siswa_view';

		$this->load->view('template', $data);
	}

	public function detil_siswa()
	{
		$data['main_view'] = 'detil_data_siswa_view';

		$this->load->view('template', $data);	
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */