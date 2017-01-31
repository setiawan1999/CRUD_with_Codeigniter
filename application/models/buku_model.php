<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Buku_model extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}

		public function getBook(){
			return array(
				array('judul' => 'Belajar Framework CI',
					  'pengarang' => 'Budi Raharjo',
					  'penerbit' => 'Informatika'
					 ),
				array('judul' => 'Belajar Photoshop',
					  'pengarang' => 'Abdul Kadir',
					  'penerbit' => 'Andi Offset'
					 )
			);
		}
	}
	
	/* End of file buku_model.php */
	/* Location: ./application/models/buku_model.php */