<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Auth');
    }

    public function index()
    {
        if ($this->session->userdata('username') != null) {
            if ($this->session->userdata('status') == 1) {
                redirect('Admin');
            } else {
                redirect('User');
            }
        } else {
            $this->load->view('auth/login');
        }
    }

    public function register()
    {
        redirect('Auth');
        if ($this->session->userdata('username') != null) {
            if ($this->session->userdata('status') == 1) {
                redirect('Admin');
            } else {
                redirect('User');
            }
        } else {
            $this->load->view('auth/register');
        }
    }

    public function login()
    {
        $name = $this->input->post('nama');
        $password = $this->input->post('password');

        $query = $this->M_Auth->getUsername($name);

        if ($query) {
            if ($query['Password'] == $password) {
                if ($query['Status'] == 1) {
                    $this->session->set_userdata('username', $name);
                    $this->session->set_userdata('status', $query['Status']);
                    redirect('Admin');
                } else {
                    $this->session->set_userdata('username', $name);
                    $this->session->set_userdata('status', $query['Status']);
                    redirect('User');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Username / Password yang anda masukkan salah!
            </div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Username / Password yang anda masukkan salah!
          </div>');
            redirect('Auth');
        }
    }
}
