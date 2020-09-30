<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function belajar($id)
    {
        
        $this->load->model('m_materi');
        $where = array('id' => $id);
        $detail = $this->m_materi->belajar($id);
        $data['detail'] = $detail;
        $this->load->view('template/nav_user');
        $this->load->view('materi/belajar', $data);
        $this->load->view('template/footer');
    }

    public function matematika_vii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->matematika_vii()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/matematika-vii', $data);
        $this->load->view('template/footer');
    }

    public function matematika_viii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->matematika_viii()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/matematika-viii', $data);
        $this->load->view('template/footer');
    }

    public function matematika_ix()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->matematika_ix()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/matematika-ix', $data);
        $this->load->view('template/footer');
    }

    public function ipa_vii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->ipa_vii()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/ipa-vii', $data);
        $this->load->view('template/footer');
    }

    public function ipa_viii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->ipa_viii()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/ipa-viii', $data);
        $this->load->view('template/footer');
    }

    public function ipa_ix()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->ipa_ix()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/ipa-ix', $data);
        $this->load->view('template/footer');
    }

    public function indo_vii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->indo_vii()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/indo-vii', $data);
        $this->load->view('template/footer');
    }

    public function indo_viii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->indo_viii()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/indo-viii', $data);
        $this->load->view('template/footer');
    }

    public function indo_ix()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->indo_ix()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/indo-ix', $data);
        $this->load->view('template/footer');
    }

    public function inggris_vii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->inggris_vii()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/inggris-vii', $data);
        $this->load->view('template/footer');
    }

    public function inggris_viii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->inggris_viii()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/inggris-viii', $data);
        $this->load->view('template/footer');
    }

    public function inggris_ix()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->inggris_ix()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/inggris-ix', $data);
        $this->load->view('template/footer');
    }

    public function agama_vii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->agama_vii()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/agama-vii', $data);
        $this->load->view('template/footer');
    }

    public function agama_viii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->agama_viii()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/agama-viii', $data);
        $this->load->view('template/footer');
    }

    public function agama_ix()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->agama_ix()->result();
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('template/nav_user');
        $this->load->view('materi/agama-ix', $data);
        $this->load->view('template/footer');
    }
}
