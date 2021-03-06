<?php
defined('BASEPATH') or exit('No direct script access allowed');

class rating extends CI_Controller
{
    public function __construct()
    {
            parent::__construct();
            // $this->load->model('star_rating_model');
            is_logged_in();
    }
    
    public function index()
    {
        $data['title'] = 'Manajemen Rating';
        $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();

        $data['rating'] = $this->db->get('rating')->result_array();

        $this->form_validation->set_rules('rating', 'Rating', 'required');

        $query = $this->db->query("SELECT * FROM rating");

        $hitung = $query->num_rows();

        $id_rt = "RT" . ($hitung+1);

        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rating/index', $data);
            $this->load->view('templates/footer');
        }else{
            $rating = $this->input->post('rating');
            $data_rating = [
                'ID_RT' => $id_rt,
                'RT'    => $rating
            ];
            $this->db->insert('rating', $data_rating);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
            redirect('rating');
        }
    }

    public function edit_rating()
    {
        $rating = $this->input->post('rating');
        $id = $this->input->post('id_rating');
        $this->db->set('RT', $rating);
        $this->db->where('ID_RT', $id);
        $this->db->update('rating');
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Data Berhasil Diperbarui</div>');
        redirect('rating');
    }

    public function hapus_rating()
    {
        $id = $this->input->post('id_rating');
        $this->db->where('ID_RT', $id);
        $this->db->delete('rating');
        $error = $this->db->error();
        if($error['code'] != 0)
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Dihapus</div>');
            redirect('rating');
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus</div>');
            redirect('rating');
        }
    }
}