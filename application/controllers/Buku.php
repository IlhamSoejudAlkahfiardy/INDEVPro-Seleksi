<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Buku');
    }

    public function index()
    {
        $data['bukus'] = $this->M_Buku->getData();
        $data['title'] = "Home";

        var_dump($data['bukus']);

        // $this->load->view('layout/header', $data);
        // $this->load->view('layout/navbar');
        // $this->load->view('pages/landing_page');
        // $this->load->view('layout/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Buku";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('tambah_buku');
        $this->load->view('layout/footer');
    }

    public function insert()
    {
        $judul = $this->input->post('judul');
        $penerbit = $this->input->post('penerbit');

        if ($judul == '' || $penerbit == '') {
            redirect(base_url(''));
        } else {
            $data = [
                'judul' => $judul,
                'penerbit' => $penerbit
            ];

            $query = $this->M_Buku->insert($data);

            if ($query) {
                redirect(base_url(''));
            } else {
                redirect(base_url(''));
            }
        }
    }

    public function update($id)
    {
        $data['id'] = $id;
        $data['title'] = "Update Buku";
        $data['buku'] = $this->M_Buku->getUpdate($id);

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('update_buku');
        $this->load->view('layout/footer');
    }

    public function save($id)
    {
        $judul = $this->input->post('judul');
        $penerbit = $this->input->post('penerbit');

        $data = [
            'judul' => $judul,
            'penerbit' => $penerbit
        ];

        $query = $this->M_Buku->save($id, $data);

        if ($query) {
            redirect(base_url(''));
        } else {
            redirect(base_url(''));
        }
    }

    public function delete($id)
    {
        $query = $this->M_Buku->delete($id);

        if ($query) {
            redirect(base_url(''));
        } else {
            redirect(base_url(''));
        }
    }
}
