<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Admin extends CI_Model
{
    public function getUser($id)
    {
        if ($id) {
            return $this->db->get_where('datauser', ['UserID' => $id])->row_array();
        } else {
            return $this->db->get('datauser')->result_array();
        }
    }

    public function getBuku($id)
    {
        if ($id) {
            return $this->db->get_where('databuku', ['ID' => $id])->row_array();
        } else {
            return $this->db->get('databuku')->result_array();
        }
    }

    public function insertUser($data)
    {
        return $this->db->insert('datauser', $data);
    }

    public function saveUpdate($id, $data)
    {
        $this->db->where('UserID', $id);
        return $this->db->update('datauser', $data);
    }

    public function deleteUser($id)
    {
        return $this->db->delete('datauser', array('UserID' => $id));
    }

    public function getAuthor($id)
    {
        if ($id) {
            return $this->db->get_where('dataauthor', ['NO' => $id])->row_array();
        } else {
            return $this->db->get('dataauthor')->result_array();
        }
    }

    public function getKategori($id)
    {
        if ($id) {
            return $this->db->get_where('datacategory', ['CategoryID' => $id])->row_array();
        } else {
            return $this->db->get('datacategory')->result_array();
        }
    }

    public function getMember($id)
    {
        if ($id) {
            return $this->db->get_where('datamember', ['MemberID' => $id])->row_array();
        } else {
            return $this->db->get('datamember')->result_array();
        }
    }

    public function getPublisher($id)
    {
        if ($id) {
            return $this->db->get_where('datapublisher', ['NO' => $id])->row_array();
        } else {
            return $this->db->get('datapublisher')->result_array();
        }
    }

    public function getTipe($id)
    {
        if ($id) {
            return $this->db->get_where('datatipebuku', ['NO' => $id])->row_array();
        } else {
            return $this->db->get('datatipebuku')->result_array();
        }
    }
}
