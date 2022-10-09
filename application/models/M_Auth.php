<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Auth extends CI_Model
{
    public function getUsername($username)
    {
        return $this->db->get_where('datauser', ['Name' => $username])->row_array();
    }
}
