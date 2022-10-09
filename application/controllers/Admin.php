<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Admin');
    }

    public function index()
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 1) {
                $data['title'] = "FTI Perpus";

                $data['sesi'] = $this->session->userdata('username');

                $this->load->view('layout_admin/header', $data);
                $this->load->view('layout_admin/navbar');
                $this->load->view('layout_admin/sidenav');
                $this->load->view('pages_admin/dashboard');
                $this->load->view('layout_admin/footer');
            } else {
                redirect('User');
            }
        } else {
            redirect('Auth');
        }
    }

    public function user()
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 1) {
                $data['title'] = "FTI Perpus";
                $data['sesi'] = $this->session->userdata('username');
                $data['allUser'] = $this->M_Admin->getUser(null);

                $this->load->view('layout_admin/header', $data);
                $this->load->view('layout_admin/navbar');
                $this->load->view('layout_admin/sidenav');
                $this->load->view('pages_admin/user');
                $this->load->view('layout_admin/footer');
            } else {
                redirect('User');
            }
        } else {
            redirect('Auth');
        }
    }

    public function addUser()
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 1) {
                $data['title'] = "FTI Perpus";
                $data['sesi'] = $this->session->userdata('username');

                $this->load->view('layout_admin/header', $data);
                $this->load->view('layout_admin/navbar');
                $this->load->view('layout_admin/sidenav');
                $this->load->view('pages_admin/add_user');
                $this->load->view('layout_admin/footer');
            } else {
                redirect('User');
            }
        } else {
            redirect('Auth');
        }
    }

    public function saveAdd()
    {
        if ($this->session->userdata('status') !== null) {
            $id = $this->input->post('id');
            $name = $this->input->post('nama');
            $password = $this->input->post('password');
            $status = $this->input->post('status');

            $data = [
                'UserID' => $id,
                'Name' => $name,
                'Password' => $password,
                'Status' => $status
            ];

            $query = $this->M_Admin->insertUser($data);

            if ($query) {
                $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
                Berhasil menambahkan user
            </div>');
                redirect('Admin/user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Gagal menambahkan user
              </div>');
            }
        } else {
            redirect('Auth');
        }
    }

    public function update($id)
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 1) {
                $data['user'] = $this->M_Admin->getUser($id);
                $data['sesi'] = $this->session->userdata('username');
                $data['title'] = 'FTI Perpus';

                $this->load->view('layout_admin/header', $data);
                $this->load->view('layout_admin/navbar');
                $this->load->view('layout_admin/sidenav');
                $this->load->view('pages_admin/update_user');
                $this->load->view('layout_admin/footer');
            } else {
                redirect('User');
            }
        } else {
            redirect('Auth');
        }
    }

    public function saveUpdate($id)
    {
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        $status = $this->input->post('status');

        $data = [
            'Name' => $nama,
            'Password' => $password,
            'Status' => $status
        ];

        $query = $this->M_Admin->saveUpdate($id, $data);

        if ($query) {
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Berhasil merubah user
        </div>');
            redirect('Admin/user');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal merubah user
          </div>');
        }
    }

    public function delete($id)
    {
        $query = $this->M_Admin->deleteUser($id);

        if ($query) {
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Berhasil menghapus user
        </div>');
            redirect('Admin/user');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal manghapus user
          </div>');
        }
    }

    public function buku()
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 1) {
                $data['title'] = "FTI Perpus";
                $data['sesi'] = $this->session->userdata('username');
                $data['allBuku'] = $this->M_Admin->getBuku('');

                $this->load->view('layout_admin/header', $data);
                $this->load->view('layout_admin/navbar');
                $this->load->view('layout_admin/sidenav');
                $this->load->view('pages_admin/buku');
                $this->load->view('layout_admin/footer');
            } else {
                redirect('User');
            }
        } else {
            redirect("Auth");
        }
    }

    public function detailBuku($id)
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 1) {
                $data['title'] = "FTI Perpus";
                $data['sesi'] = $this->session->userdata('username');
                $data['buku'] = $this->M_Admin->getBuku($id);

                $this->load->view('layout_admin/header', $data);
                $this->load->view('layout_admin/navbar');
                $this->load->view('layout_admin/sidenav');
                $this->load->view('pages_admin/detail_buku');
                $this->load->view('layout_admin/footer');
            } else {
                redirect('User');
            }
        } else {
            redirect("Auth");
        }
    }

    public function author()
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 1) {
                $data['title'] = "FTI Perpus";
                $data['sesi'] = $this->session->userdata('username');
                $data['allAuthor'] = $this->M_Admin->getAuthor('');

                $this->load->view('layout_admin/header', $data);
                $this->load->view('layout_admin/navbar');
                $this->load->view('layout_admin/sidenav');
                $this->load->view('pages_admin/author');
                $this->load->view('layout_admin/footer');
            } else {
                redirect('User');
            }
        } else {
            redirect("Auth");
        }
    }

    public function kategori()
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 1) {
                $data['title'] = "FTI Perpus";
                $data['sesi'] = $this->session->userdata('username');
                $data['allKategori'] = $this->M_Admin->getKategori('');

                $this->load->view('layout_admin/header', $data);
                $this->load->view('layout_admin/navbar');
                $this->load->view('layout_admin/sidenav');
                $this->load->view('pages_admin/kategori');
                $this->load->view('layout_admin/footer');
            } else {
                redirect('User');
            }
        } else {
            redirect("Auth");
        }
    }

    public function member()
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 1) {
                $data['title'] = "FTI Perpus";
                $data['sesi'] = $this->session->userdata('username');
                $data['allMember'] = $this->M_Admin->getMember('');

                $this->load->view('layout_admin/header', $data);
                $this->load->view('layout_admin/navbar');
                $this->load->view('layout_admin/sidenav');
                $this->load->view('pages_admin/member');
                $this->load->view('layout_admin/footer');
            } else {
                redirect('User');
            }
        } else {
            redirect("Auth");
        }
    }

    public function publisher()
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 1) {
                $data['title'] = "FTI Perpus";
                $data['sesi'] = $this->session->userdata('username');
                $data['allPublisher'] = $this->M_Admin->getPublisher('');

                $this->load->view('layout_admin/header', $data);
                $this->load->view('layout_admin/navbar');
                $this->load->view('layout_admin/sidenav');
                $this->load->view('pages_admin/publisher');
                $this->load->view('layout_admin/footer');
            } else {
                redirect('User');
            }
        } else {
            redirect("Auth");
        }
    }

    public function tipe()
    {
        if ($this->session->userdata('status') !== null) {
            if ($this->session->userdata('status') == 1) {
                $data['title'] = "FTI Perpus";
                $data['sesi'] = $this->session->userdata('username');
                $data['allTipe'] = $this->M_Admin->getTipe('');

                $this->load->view('layout_admin/header', $data);
                $this->load->view('layout_admin/navbar');
                $this->load->view('layout_admin/sidenav');
                $this->load->view('pages_admin/tipe');
                $this->load->view('layout_admin/footer');
            } else {
                redirect('User');
            }
        } else {
            redirect("Auth");
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
