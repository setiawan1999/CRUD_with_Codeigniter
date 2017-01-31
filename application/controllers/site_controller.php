<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_controller extends CI_Controller {
	public function __construct()
	{

		parent::__construct();
		//Do your magic here
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('siswahubung');

	}

	public function index()
	{
		
		$data['data']	 = $this->siswahubung->tampil()->result_object();
		$data['content'] = 'site/content';
		$this->load->view('template_site',$data);

	}

	public function Tambah()
	{

		$data['content'] = 'site/form';

		$this->load->view('template_site',$data);

	}

	public function Insert()
	{

		$this->form_validation->set_rules('nama_awl', 'Nama Awal', 'required');
		$this->form_validation->set_rules('nama_akhr', 'Nama Akhir', 'required');

		if ($this->form_validation->run() == FALSE) {
			redirect('site_controller/tambah');
		} else {

			$namaawal = $this->input->post('nama_awl');
			$namaakhir = $this->input->post('nama_akhr');
			$alamat = $this->input->post('alamat');

			$object = array(
				'nama_awal' => $namaawal,
				'nama_akhir' => $namaakhir,
				'alamat' => $alamat
			);
			
			$query = $this->siswahubung->insert($object);

			if($query){
				$this->session->set_flashdata('info', 'Insert Berhasil');
				redirect('site_controller');
			}
		}

	}

	public function Hapus($id)
	{
		$this->siswahubung->delete($id);
		if($this->db->affected_rows())
		{
			$this->session->set_flashdata('info', 'Data Berhasil di Hapus');
			redirect('site_controller');
		}
		else
		{
			$this->session->set_flashdata('info', 'Gagal Menghapus Data');
			redirect('site_controller');	
		}
	}

	public function edit($id)
	{
		if($this->input->post('submit'))
		{
			$namaawal = $this->input->post('nama_awl');
			$namaakhir = $this->input->post('nama_akhr');
			$alamat = $this->input->post('alamat');

			$object = array(
				'nama_awal' => $namaawal,
				'nama_akhir' => $namaakhir,
				'alamat' => $alamat
			);

			$this->db->where('id', $id);
			$this->db->update('siswa', $object);

			if($this->db->affected_rows())
			{
				$this->session->set_flashdata('info', 'Update Berhasil');
				redirect('site_controller');
			}
			else{
				$this->session->set_flashdata('info', 'Update Gagal');
				redirect('site_controller');
			}
		}else{
			$data['content'] = 'site/formedit';
			$data['editdata'] = $this->db->get_where('siswa', array('id' => $id ))->row();
			$this->load->view('template_site', $data);
		}

	}
}

/* End of file site_controller.php */
/* Location: ./application/controllers/site_controller.php */