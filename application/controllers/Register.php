<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

   public function __construct() {
      parent::__construct();
      // Load library atau model yang diperlukan di sini
      $this->load->model('m_model'); // Gantilah 'user_model' dengan nama model yang sesuai
   }

   public function index() {
      // Tampilkan halaman registrasi di sini
      $this->load->view('auth/register'); // Sesuaikan dengan nama tampilan registrasi Anda
   }

   public function process_registration() {
      // Proses data registrasi di sini
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $email = $this->input->post('email');
      $role = $this->input->post('role');

      // Validasi password
      if (strlen($password) < 8 || !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', $password)) {
         // Password tidak memenuhi persyaratan
         $this->session->set_flashdata('error_message', 'Password harus memiliki setidaknya 8 karakter, satu huruf besar, satu huruf kecil, dan satu angka.');
         redirect('register'); // Redirect kembali ke halaman registrasi
      } else {
         // Hash password menggunakan MD5
         $hashed_password = md5($password);
   
         // Simpan data pengguna ke database
         $data = array(
            'username' => $username,
            'password' => $hashed_password,
            'email' => $email,
            'role' => $role,
         );
   
         $this->m_model->register($data); // Panggil model untuk menyimpan data
   
         // Redirect ke halaman login atau halaman selamat datang
         redirect('auth'); // Sesuaikan dengan URL halaman login atau halaman selamat datang
      }
   }
}
