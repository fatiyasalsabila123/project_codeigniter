<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Memuat model 'm_model' dan helper 'my_helper'
        $this->load->model('m_model');
        $this->load->model('model_siswa');
        // $this->load->helper('my_helper');
        
        // Mengecek apakah pengguna telah login, jika tidak, maka akan diarahkan ke halaman login
        if ($this->session->userData('logged_in') != true) {
            redirect(base_url().'auth');
        }
    }

    public function dashboard() {
        $data['siswaa'] = $this->m_model->get_siswa();
        $data['gurus'] = $this->m_model->get_guru();
        $data['total_siswa'] = count($data['siswaa']);
        $data['total_guru'] = count($data['gurus']);
        $this->load->view('page/dashboard', $data);
    }


    public function aksi_ubah_guru(){
        $data = array (
            'nama_guru' => $this->input->post('nama_guru'),
            'nik' => $this->input->post('nik'),
            'mapel' => $this->input->post('mapel'),
            'gender' => $this->input->post('gender'),
        );
        $eksekusi=$this->m_model->ubah_data('guru', $data, array('id' =>$this->input->post('id')));
        if ($eksekusi) {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('admin/guru'));
        } else {
            $this->session->set_flashdata('error', 'gagal');
            redirect(base_url('admin/dashboard'.$this->input->post('id')));
        }
    }
    
    public function siswa() {
        $data['murid'] = $this->model_siswa->get_siswaa();
        $this->load->view('page/siswa', $data);
    }

    public function hapus_siswa($id) {
        $this->m_model->delete('siswa', 'id', $id);
        redirect(base_url('admin/siswa'));
    }
    
    public function update_siswa($id) {
        // Memanggil model_siswa untuk mengambil data siswa berdasarkan ID
        $data['edit_siswa'] = $this->model_siswa->get_by_id_siswa('siswa', 'id', $id)->result();
    
        // Memuat view 'update_siswa' dan mengirimkan data siswa ke view
        $this->load->view('page/update_siswa', $data);
    }
    

        public function aksi_ubah_siswa(){
            $data = array (
                'username' => $this->input->post('username'),
                'nisn' => $this->input->post('nisn'),
                'gender' => $this->input->post('gender'),
                'kelas' => $this->input->post('kelas'),
                'jurusan' => $this->input->post('jurusan'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $eksekusi=$this->m_model->ubah_data('siswa', $data, array('id' =>$this->input->post('id')));
            if ($eksekusi) {
                $this->session->set_flashdata('sukses', 'berhasil');
                redirect(base_url('admin/siswa'));
            } else {
                $this->session->set_flashdata('error', 'gagal');
                redirect(base_url('admin/edit_siswa/'.$this->input->post('id')));
            }
        }

        public function guru() {
            $data['guru'] = $this->m_model->get_guru();
            $this->load->view('page/guru', $data);
        }
        
    public function hapus_guru($id) {
        $this->m_model->delete('guru', 'id', $id);
        redirect(base_url('admin/guru'));
    }

        public function edit_guru($id){
            $data['edit_guru']=$this->m_model->get_by_id_guru('guru' , 'id', $id)->result();
            $this->load->view('page/edit_guru', $data);
          }

          public function tambah_guru() {
            $data['guru'] = $this->m_model->get_data('guru')->result();
            $this->load->view('page/tambah_guru', $data);
          }

    
        // public function update_siswa() {
        //     $this->load->view('admin/update_siswa');
        // }
    
        public function aksi_tambah_guru() {
            $data=[
                'nama_guru' => $this->input->post('nama_guru'),
                'nik' => $this->input->post('nik'),
                'gender' => $this->input->post('gender'),
                'mapel' => $this->input->post('mapel'),
            ];
    
            $this->m_model->tambah_data('guru', $data);
            redirect(base_url('admin/guru'));
        }
    
    }
?>