<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{

    public function getAllUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('level', 'asc');
        return $this->db->get()->result();
    }

    public function getAllUser2()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('level', 'user');
        return $this->db->get()->result();
    }

    public function getAllNilai()
    {
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('user', 'nilai.id_user=user.id');
        $this->db->order_by('nama', 'asc');
        return $this->db->get()->result();
    }

    public function getNilaiUser() //query for user get self data in table nilai
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->join('nilai', 'nilai.id_user = user.id');
        return $this->db->get()->result();
    }
}