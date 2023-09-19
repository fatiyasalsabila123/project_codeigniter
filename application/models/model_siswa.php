<?php 
     class Model_siswa extends CI_Model {
        // Fungsi untuk mengambil semua data dari tabel
        function get_data($table) {
            return $this->db->get($table);
        }
     // Fungsi untuk mengambil data dari tabel berdasarkan kondisi tertentu
     function getwhere($table, $data) {
        return $this->db->get_where($table, $data);
    }

    public function get_siswaa() {
        $query = $this->db->get('siswa'); 
        return $query->result(); // Mengembalikan hasil query sebagai array objek
     }

     public function get_by_id_siswa($table, $id_colomn, $id) {
        $data = $this->db->where($id_colomn, $id)->get($table);
        return $data;
     }
}
    ?>