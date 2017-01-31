<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswahubung extends CI_Model {

	public function tampil(){

		return $this->db->get('siswa');

	}

	public function insert($data){
		return $this->db->insert('siswa', $data);

	}

	public function delete($parameter)
	{
		return $this->db->delete('siswa',array('id'=>$parameter));
	}
}

/* End of file siswahubung.php */
/* Location: ./application/models/siswahubung.php */