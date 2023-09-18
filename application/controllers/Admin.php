<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Memuat model 'm_model' dan helper 'my_helper'
        $this->load->model('m_model');
        // $this->load->helper('my_helper');
        
        // Mengecek apakah pengguna telah login, jika tidak, maka akan diarahkan ke halaman login
        if ($this->session->userData('logged_in') != true) {
            redirect(base_url().'auth');
        }
    }

    public function dashboard($id = null) {
        $data['siswaa'] = $this->m_model->get_siswa();
        $data['gurus'] = $this->m_model->get_guru();
        $data['total_siswa'] = count($data['siswaa']);
        $data['total_guru'] = count($data['gurus']);
        
        // Jika $id tidak null, ambil data guru berdasarkan $id
        if ($id !== null) {
            $data['guru_edit'] = $this->m_model->get_by_id('siswa', 'id', $id)->result();
        }
    
        $this->load->view('page/dashboard', $data);
    }
    

    public function aksi_ubah_guru(){
        $data = array (
            'nama_guru' => $this->input->post('nama_guru'),
            'nik' => $this->input->post('nik'),
            'gender' => $this->input->post('gender'),
            'mapel' => $this->input->post('mapel'),
        );
        $eksekusi=$this->m_model->ubah_data('guru', $data, array('id' =>$this->input->post('id')));
        if ($eksekusi) {
            // $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('admin/dashboard'));
        } else {
            // $this->session->set_flashdata('error', 'gagal');
            redirect(base_url('admin/dashboard'.$this->input->post('id')));
        }
    }


    // public function guru() {
    //     $data['gurus'] = $this->m_model->get_guru();
    //     $this->load->view('page/dashboard', $data);
    // }
}
?>