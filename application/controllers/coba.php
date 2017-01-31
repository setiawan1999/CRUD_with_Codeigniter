<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class coba extends CI_Controller
    {   

        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('form','url'));
            $this->load->model(array('cobaDB'));
        }

        public function template($file,$data)
        {

            $this->load->view('head');
            $this->load->view($file, $data);
            $this->load->view('footer');

        }

        public function index()
        {
            $data['anggota'] = $this->cobaDB->view();
            $this->template('view_data', $data);
        }

        public function form()
        {
            $this->load->view('form_simpan');
        }

        public function simpan()
        {
            $data = array(
                    'nama'          => $this->input->post('nama'),
                    'nama_depan'    => $this->input->post('nama_depan'),
                    'nama_belakang' => $this->input->post('nama_belakang'),
                );

            if ($this->cobaDB->input($data) == true) {
                $pesan['message'] = "data berhasil di simpan"; 
            } else 
            {
                $pesan['message'] = "data gagal di simpan";
            }

            $this->template("form_simpan", $pesan);
        }

        public function get()
        {
            $id = $this->input->get('id');
            $data['anggota'] = $this->cobaDB->get($id);

            $this->load->view('form_edit', $data);
        }

        public function update()
        {
            $data = array(
                'nama'          => $this->input->post('nama'),
                'nama_depan'    => $this->input->post('nama_depan'),
                'nama_belakang' => $this->input->post('nama_belakang'),
            );

            if ($this->cobaDB->update($data) == true) {
            
                $this->index();
            
            }

        }

        public function hapus()
        {

            $id = $this->input->get('id');   
            if ($this->cobaDB->delete($id) == true) {
                return redirect(base_url().'index.php/coba/');
            }

        }

    }

 ?>