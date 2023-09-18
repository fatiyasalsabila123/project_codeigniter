<?php 
     class M_model extends CI_Model {
        // Fungsi untuk mengambil semua data dari tabel
        function get_data($table) {
            return $this->db->get($table);
        }
     // Fungsi untuk mengambil data dari tabel berdasarkan kondisi tertentu
     function getwhere($table, $data) {
        return $this->db->get_where($table, $data);
    }
    public function register($data) {
        // Simpan data pengguna ke database
        $this->db->insert('admin', $data); // Gantilah 'users' dengan nama tabel pengguna Anda
     }
     public function get_guru() {
        $query = $this->db->get('guru'); 
        return $query->result(); // Mengembalikan hasil query sebagai array objek
     }
     public function get_siswa() {
        $query = $this->db->get('siswa'); 
        return $query->result(); // Mengembalikan hasil query sebagai array objek
     }
     
     public function get_by_id($table, $id_column, $id) {
      $data = $this->db->where($id_column, $id)->get($table);
      return $data;
  }
  
  public function ubah_data($table, $data, $where) {
   $this->db->where($where);
   $this->db->update($table, $data);
   return $this->db->affected_rows();
}
   //   public function get_admin() {
   //    $query = $this->db->get('admin');
   //    return $query->result();
   //   }
     }
?>