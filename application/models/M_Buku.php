<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Buku extends CI_Model
{
    public function getData()
    {
        return $this->db->get('buku')->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert('buku', $data);
    }

    public function getUpdate($id)
    {
        return $this->db->get_where('buku', ['id' => $id])->row_array();
    }

    public function save($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('buku', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('buku', array('id' => $id));
    }
}
