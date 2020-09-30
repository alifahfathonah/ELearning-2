<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->session->set_flashdata('not-login', 'Gagal!');
        if (!$this->session->userdata('email')) {
            redirect('welcome/guru');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('data_guru', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('guru/template/sidebar');
        $this->load->view('guru/index');
    }

    //kelola materi

    public function tambah_materi()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom deskripsi.',
            'min_length' => 'deskripsi terlalu pendek.',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->model('m_tahunajaran');
            $data_tahunajaran['user'] = $this->m_tahunajaran->tampil_data()->result();
            $this->load->view('guru/template/sidebar');
            $this->load->view('guru/tambah_materi', $data_tahunajaran);
        } else {
            $upload_video = $_FILES['video'];

            if ($upload_video) {
                $config['allowed_types'] = 'mp4|mkv|mov';
                $config['max_size'] = '0';
                $config['upload_path'] = './assets/materi_video';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('video')) {
                    $video = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }
            $data = [
                'nama_guru' => htmlspecialchars($this->input->post('nama_guru', true)),
                'nama_materi' => htmlspecialchars($this->input->post('nama_materi', true)),
                'video' => $video,
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'id_materi' => htmlspecialchars($this->input->post('id_materi', true)),
                'id_tahunajaran' => htmlspecialchars($this->input->post('id_tahunajaran', true)),
                'kurikulum' => htmlspecialchars($this->input->post('kurikulum', true)),
            ];

            $this->db->insert('materi', $data);
            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('guru/data_materi'));
        }
    }

    // private function _uploadImage()
    // {
    //     $config['upload_path'] = './assets/materi_video';
    //     $config['allowed_types'] = 'mp4|mkv';
    //     $config['file_name'] = $this->product_id;
    //     $config['overwrite'] = true;
    //     $config['max_size'] = 0; // 1MB
    //     // $config['max_width']            = 1024;
    //     // $config['max_height']           = 768;

    //     $this->load->library('upload', $config);

    //     if ($this->upload->do_upload('video')) {
    //         return $this->upload->data("file_name");
    //     }

    //     return "default.mp4";
    // }

    //manajemen materi

    public function data_materi()
    {
        $this->load->model('m_materi');

        $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_materi->tampil_data()->result();
        $this->load->view('guru/template/sidebar');
        $this->load->view('guru/data_materi', $data);
    }

    public function detail_materi($id_materi)
    {
        $this->load->model('m_materi');
        $where = array('id_materi' => $id_materi);
        $detail = $this->m_materi->detail_materi($id_materi);
        $data['detail'] = $detail;
        $this->load->view('guru/template/sidebar');
        $this->load->view('guru/detail_materi', $data);
    }

    public function update_materi($id)
    {
        $this->load->model('m_materi');
        $where = array('id_materi' => $id);
        $data['user'] = $this->m_materi->update_materi($where, 'materi')->result();
        $this->load->view('guru/template/sidebar');
        $this->load->view('guru/update_materi', $data);
    }

    public function materi_edit()
    {
        $this->load->model('m_materi');

        $id = $this->input->post('id_materi');
        $nama_guru = $this->input->post('nama_guru');
        $nama_materi = $this->input->post('nama_materi');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'nama_guru' => $nama_guru,
            'nama_materi' => $nama_materi,
            'deskripsi' => $deskripsi,

        );

        $where = array(
            'id_materi' => $id,
        );

        $this->m_materi->update_data($where, $data, 'materi');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('guru/data_materi');
    }

    public function delete_materi($id)
    {
        $this->load->model('m_materi');
        $where = array('id_materi' => $id);
        $this->m_materi->delete_materi($where, 'materi');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('guru/data_materi');
    }

    //kelola evaluasi

    public function tambah_evaluasi()
    {
        $this->form_validation->set_rules('jenis_evaluasi', 'Jenis Evaluasi', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom deskripsi.',
            'min_length' => 'Jenis terlalu pendek.',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('guru/template/sidebar');
            $this->load->view('guru/tambah_evaluasi');
        } else {
            $upload_lampiran = $_FILES['lampiran'];

            if ($upload_lampiran) {
                $config['allowed_types'] = '*';
                $config['max_size'] = '0';
                $config['upload_path'] = './assets/evaluasi_file';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('lampiran')) {
                    $lampiran = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }
            $data = [
                'jenis_evaluasi' => htmlspecialchars($this->input->post('jenis_evaluasi', true)),
                'nama_materi' => htmlspecialchars($this->input->post('nama_materi', true)),
                'nama_guru' => htmlspecialchars($this->input->post('nama_guru', true)),
                'lampiran' => $lampiran,
                'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
                'id_evaluasi' => htmlspecialchars($this->input->post('id_evaluasi', true)),
            ];

            $this->db->insert('evaluasi', $data);
            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('guru/evaluasi'));
        }
    }

    // private function _uploadImage2()
    // {
    //     $config['upload_path'] = './assets/evaluasi_file';
    //     $config['allowed_types'] = 'mp4|mkv|jpeg|png|doc|docx|pdf|xls|Xlsx|ppt|pptx';
    //     $config['file_name'] = $this->product_id;
    //     $config['overwrite'] = true;
    //     $config['max_size'] = 0; // 1MB
    //     // $config['max_width']            = 1024;
    //     // $config['max_height']           = 768;

    //     $this->load->library('upload', $config);

    //     if ($this->upload->do_upload('image')) {
    //         return $this->upload->data("file_name");
    //     }

    //     return "default.mp4";
    // }


    public function evaluasi()
    {
        $this->load->model('m_evaluasi');

        $data['user'] = $this->db->get_where('data_guru', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_evaluasi->tampil_data()->result();
        $this->load->view('guru/template/sidebar');
        $this->load->view('guru/data_evaluasi', $data);
    }

    public function detail_evaluasi($id_evaluasi)
    {
        $this->load->model('m_evaluasi');
        $where = array('id_evaluasi' => $id_evaluasi);
        $detail = $this->m_evaluasi->detail_evaluasi($id_evaluasi);
        $data['detail'] = $detail;
        $this->load->view('guru/template/sidebar');
        $this->load->view('guru/detail_evaluasi', $data);
    }

    public function hasil_evaluasi()
    {
        $this->load->model('m_hasil');

        $data['user'] = $this->db->get_where('data_guru', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_hasil->tampil_data()->result();
        $this->load->view('guru/template/sidebar');
        $this->load->view('guru/hasil_evaluasi', $data);
    }

    public function detail_hasil($id)
    {
        $this->load->model('m_hasil');
        $where = array('id_evaluasi' => $id);
        $detail = $this->m_hasil->detail_hasil($id);
        $data['detail'] = $detail;
        $this->load->view('guru/template/sidebar');
        $this->load->view('guru/detail_hasil_evaluasi', $data);
    }

    public function update_nilai()
    {
        $this->load->model('m_hasil');

        $id_hasilevaluasi = $this->input->post('id_hasilevaluasi');
        $skor = $this->input->post('skor');

        $data = array(
            'skor' => $skor,

        );

        $where = array(
            'id_hasilevaluasi' => $id_hasilevaluasi,
        );

        $this->m_hasil->update_data($where, $data, 'hasil_evaluasi');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('guru/hasil_evaluasi');
    }

    //kelola soal

    public function tambah_soal()
    {
        $this->form_validation->set_rules('soal', 'Soal', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom deskripsi.',
            'min_length' => 'Soal terlalu pendek.',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('guru/template/sidebar');
            $this->load->view('guru/tambah_soal');
        } else {
            $data = [
                'soal' => htmlspecialchars($this->input->post('soal', true)),
                'a' => htmlspecialchars($this->input->post('a', true)),
                'b' => htmlspecialchars($this->input->post('b', true)),
                'c' => htmlspecialchars($this->input->post('c', true)),
                'd' => htmlspecialchars($this->input->post('d', true)),
                'e' => htmlspecialchars($this->input->post('e', true)),
                'kunci_jawaban' => htmlspecialchars($this->input->post('kunci_jawaban', true)),
            ];

            $this->db->insert('soal', $data);

            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('guru/soal'));
        }
    }

    public function soal()
    {
        $this->load->model('m_soal');

        $data['user'] = $this->db->get_where('data_guru', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_soal->tampil_data()->result();
        $this->load->view('guru/template/sidebar');
        $this->load->view('guru/soal', $data);
    }

    //Informasi
    public function rencana_pembelajaran()
    {
        $this->load->model('m_informasi');
        $data['informasi'] = $this->m_informasi->rencana_pembelajaran()->result();
        $data['user'] = $this->db->get_where('data_guru', ['email' =>
            $this->session->userdata('email')])->row_array();
        $data['user'] = $this->m_informasi->rencana_pembelajaran()->result();
        //$data['user'] = $this->m_informasi->tampil_data()->result();
        $this->load->view('guru/template/sidebar');
        $this->load->view('guru/rencana_pembelajaran', $data);
    }

    public function pengumuman()
    {
        $this->load->model('m_informasi');
        $data['user'] = $this->db->get_where('data_guru', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_informasi->pengumuman()->result();
        $this->load->view('guru/template/sidebar');
        $this->load->view('guru/pengumuman', $data);
    }

    public function detail_informasi($id)
    {
        $this->load->model('m_informasi');
        $where = array('id_informasi' => $id);
        $detail = $this->m_informasi->detail_informasi($id);
        $data['detail'] = $detail;
        $this->load->view('guru/template/sidebar');
        $this->load->view('guru/detail_informasi', $data);
    }

    
}
