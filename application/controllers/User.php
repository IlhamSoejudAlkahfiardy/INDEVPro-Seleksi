<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }

    public function index()
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 2) {
                $data['title'] = "Perpustakaan FTI";
                $data['allBuku'] = $this->M_User->getData('');

                $this->load->view('layout_user/header', $data);
                $this->load->view('layout_user/navbar');
                $this->load->view('pages_user/home');
                $this->load->view('layout_user/footer');
            } else {
                redirect('Admin');
            }
        } else {
            redirect('Auth');
        }
    }

    public function detail($id)
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 2) {
                $data['title'] = "Perpustakaan FTI";
                $data['buku'] = $this->M_User->getData($id);

                $this->load->view('layout_user/header', $data);
                $this->load->view('layout_user/navbar');
                $this->load->view('pages_user/detail');
                $this->load->view('layout_user/footer');
            } else {
                redirect('Admin');
            }
        } else {
            redirect('Auth');
        }
    }

    public function cari()
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 2) {
                $data['title'] = "Perpustakaan FTI";
                $keyword = $this->input->post('keyword');
                $data['allBuku'] = $this->M_User->getKeyword($keyword);

                $this->load->view('layout_user/header', $data);
                $this->load->view('layout_user/navbar');
                $this->load->view('pages_user/home');
                $this->load->view('layout_user/footer');
            } else {
                redirect('Admin');
            }
        } else {
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('message', '<div class="text-center alert alert-info" role="alert">
        Anda telah logout
      </div>');
        redirect('Auth');
    }
}
