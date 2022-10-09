<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{
    public function getData($id)
    {
        if ($id) {
            return $this->db->get_where('databuku', ['ID' => $id])->row_array();
        } else {
            return $this->db->get('databuku')->result_array();
        }
    }

    public function getKeyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('databuku');
        $this->db->like('Title', $keyword);
        $this->db->or_like('Author', $keyword);
        $this->db->or_like('Publisher', $keyword);
        $this->db->or_like('Category', $keyword);
        $this->db->or_like('Year', $keyword);
        return $this->db->get()->result_array();
    }
}
