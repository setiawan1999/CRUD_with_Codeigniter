<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');

    class cobaDB extends CI_Model
    {
        
        public function __construct()
        {

            $this->db = $this->load->database('default', true);

        }

        public function input($data)
        {
            foreach ($data as $key => $value) {
                $this->db->set($key, $value);
            }

            $this->db->insert('anggota');

            return true;
        }

         public function update($data)
        {
            foreach ($data as $key => $value) {
                $this->db->set($key, $value);
            }

            $this->db->update('anggota');

            return true;
        }

        public function view()
        {
            $data = $this->db->get('anggota');
            return $data->result();
        }

        public function get($id)
        {
            $data = $this->db->get('anggota', $id);
            return $data->result();
        }

        public function delete($id)
        {

            $this->db->delete('anggota', array('id_anggota' => $id));

            return true;
        }

    }

 ?>