<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->session->set_flashdata('not-login', 'Gagal!');
        if (!$this->session->userdata('email')) {
            redirect('welcome/admin');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/index');
    }

    public function about_developer()
    {
        $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/about_developer');
    }

    public function about_learnify()
    {
        $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();
        
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/about_learnify');
    }

    // Management Siswa

    public function data_siswa()
    {
        $this->load->model('m_siswa');

        $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_siswa->tampil_data()->result();
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/data_siswa', $data);
    }

    public function detail_siswa($id)
    {
        $this->load->model('m_siswa');
        $where = array('nis' => $id);
        $detail = $this->m_siswa->detail_siswa($id);
        $data['detail'] = $detail;
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/detail_siswa', $data);
    }

    public function update_siswa($id)
    {
        $this->load->model('m_siswa');
        $where = array('nis' => $id);
        $data['user'] = $this->m_siswa->update_siswa($where, 'data_siswa')->result();
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/update_siswa', $data);
    }

    public function user_edit()
    {
        $this->load->model('m_siswa');

        $id = $this->input->post('nis');
        $nama = $this->input->post('nama_siswa');
        $email = $this->input->post('email');
        $gambar = $_FILES['image']['name'];

        $data = array(
            'nama_siswa' => $nama,
            'email' => $email,
        );

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './assets/profile_picture';

        $this->load->library('upload', $config);
        //berhasil
        if ($this->upload->do_upload('image')) {
            $gambarLama = $data['user']['image'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/assets/profile_picture/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('image', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }

        $where = array(
            'nis' => $id,
        );

        $this->m_siswa->update_data($where, $data, 'data_siswa');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('admin/data_siswa');
    }

    public function delete_siswa($id)
    {
        $this->load->model('m_siswa');
        $where = array('nis' => $id);
        $this->m_siswa->delete_siswa($where, 'data_siswa');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('admin/data_siswa');
    }

    // manajemen guru

    public function data_guru()
    {
        $this->load->model('m_guru');
        $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_guru->tampil_data()->result();
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/data_guru', $data);
    }

    public function detail_guru($nuptk)
    {
        $this->load->model('m_guru');
        $where = array('nuptk' => $nuptk);
        $detail = $this->m_guru->detail_guru($nuptk);
        $data['detail'] = $detail;
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/detail_guru', $data);
    }

    public function update_guru($nuptk)
    {
        $this->load->model('m_guru');
        $where = array('nuptk' => $nuptk);
        $data['user'] = $this->m_guru->update_guru($where, 'data_guru')->result();
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/update_guru', $data);
    }

    public function guru_edit()
    {
        $this->load->model('m_guru');
        $nuptk = $this->input->post('nuptk');
        $nama_guru = $this->input->post('nama_guru');
        $email = $this->input->post('email');
        $nama_materi = $this->input->post('nama_materi');

        $data = array(
            'nuptk' => $nuptk,
            'nama_guru' => $nama_guru,
            'email' => $email,
            'nama_materi' => $nama_materi,

        );

        $where = array(
            'nuptk' => $nuptk,
        );

        $this->m_guru->update_data($where, $data, 'data_guru');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('admin/data_guru');
    }

    public function update_materi($id)
    {
        $this->load->model('m_materi');
        $where = array('id_materi' => $id);
        $data['user'] = $this->m_materi->update_materi($where, 'materi')->result();
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/update_materi', $data);
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
        redirect('admin/data_materi');
    }

    public function delete_guru($nuptk)
    {
        $this->load->model('m_guru');
        $where = array('nuptk' => $nuptk);
        $this->m_guru->delete_guru($where, 'data_guru');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('admin/data_guru');
    }
    

    public function add_guru()
    {
        $this->form_validation->set_rules('nuptk', 'nuptk', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom NUPTK.',
            'min_length' => 'NUPTK terlalu pendek.',
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[data_guru.email]', [
            'is_unique' => 'Email ini telah digunakan!',
            'required' => 'Harap isi kolom email.',
            'valid_email' => 'Masukan email yang valid.',
        ]);

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom Nama.',
            'min_length' => 'Nama terlalu pendek.',
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'required' => 'Harap isi kolom Password.',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]', [
            'matches' => 'Password tidak sama!',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/add_guru');
        } else {
            $data = [
                'nuptk' => htmlspecialchars($this->input->post('nuptk', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'nama_guru' => htmlspecialchars($this->input->post('nama', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama_materi' => htmlspecialchars($this->input->post('materi', true)),
            ];

            $this->db->insert('data_guru', $data);

            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('admin/data_guru'));
        }
    }

    public function add_siswa()
    {
        $this->form_validation->set_rules('nis', 'Nis', 'required|trim|is_unique[data_siswa.nis]', [
            'is_unique' => 'NIS telah digunakan!',
            'required' => 'Harap isi kolom NIS.',
            'min_length' => 'NIS terlalu pendek.',
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[data_siswa.email]', [
            'is_unique' => 'Email ini telah digunakan!',
            'required' => 'Harap isi kolom email.',
            'valid_email' => 'Masukan email yang valid.',
        ]);

        $this->form_validation->set_rules('nama_siswa', 'Nama', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom Nama.',
            'min_length' => 'Nama terlalu pendek.',
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'required' => 'Harap isi kolom Password.',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]', [
            'matches' => 'Password tidak sama!',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/add_siswa');
        } else {
            $data = [
                'nis' => htmlspecialchars($this->input->post('nis', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'tahun_masuk' => htmlspecialchars($this->input->post('tahun_masuk', true)),
            ];

            $this->db->insert('data_siswa', $data);

            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('admin/data_siswa'));
        }
    }

    public function add_informasi()
    {
        $this->form_validation->set_rules('isi_informasi', 'Isi Informasi', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom isi informasi.',
            'min_length' => 'isi informasi terlalu pendek.',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/add_informasi');
        } else {
            $upload_gambar = $_FILES['gambar'];

            if ($upload_gambar) {
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '0';
                $config['upload_path'] = './assets/informasi_gambar';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }
            $data = [
                'id_informasi' => htmlspecialchars($this->input->post('id_informasi', true)),
                'judul_informasi' => htmlspecialchars($this->input->post('judul_informasi', true)),
                'kategori_informasi' => htmlspecialchars($this->input->post('kategori_informasi', true)),
                'isi_informasi' => htmlspecialchars($this->input->post('isi_informasi', true)),
                'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
                'gambar' => $gambar,
            ];

            $this->db->insert('data_informasi', $data);
            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('admin/add_informasi'));
        }
    }

    public function delete_informasi($id)
    {
        $this->load->model('m_informasi');
        $where = array('id_informasi' => $id);
        $this->m_informasi->delete_informasi($where, 'data_informasi');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('admin/data_informasi');
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './assets/informasi_gambar';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $this->product_id;
        $config['overwrite'] = true;
        $config['max_size'] = 0; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    public function data_informasi()
    {
        $this->load->model('m_informasi');

        $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_informasi->tampil_data()->result();
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/data_informasi', $data);
    }

    public function detail_informasi($id)
    {
        $this->load->model('m_informasi');
        $where = array('id_informasi' => $id);
        $detail = $this->m_informasi->detail_informasi($id);
        $data['detail'] = $detail;
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/detail_informasi', $data);
    }

    public function update_informasi($id)
    {
        $this->load->model('m_informasi');
        $where = array('id_informasi' => $id);
        $data['user'] = $this->m_informasi->update_informasi($where, 'data_informasi')->result();
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/update_informasi', $data);
    }

    public function informasi_edit()
    {
        $this->load->model('m_informasi');

        $id_informasi = $this->input->post('id_informasi');
        $judul_informasi = $this->input->post('judul_informasi');
        $kategori_informasi = $this->input->post('kategori_informasi');
        $isi_informasi = $this->input->post('isi_informasi');
        $tanggal = $this->input->post('tanggal');
        $gambar = $_FILES['gambar']['name'];

        $data = array(
            'judul_informasi' => $judul_informasi,
            'kategori_informasi' => $kategori_informasi,
            'isi_informasi' => $isi_informasi,
            'tanggal' => $tanggal,
            'gambar' => $gambar,
        );

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './assets/informasi_gambar';

        $this->load->library('upload', $config);
        //berhasil
        if ($this->upload->do_upload('image')) {
            $gambarLama = $data['user']['image'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/assets/informasi_gambar/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('image', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }

        $where = array(
            'id_informasi' => $id_informasi,
        );

        $this->m_informasi->update_data($where, $data, 'data_informasi');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('admin/data_informasi');
    }

    public function data_tahunajaran()
    {
        $this->load->model('m_tahunajaran');
        $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_tahunajaran->tampil_data()->result();
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/data_tahunajaran', $data);
    }

    public function add_tahunajaran()
    {
        $this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', 'required|trim|is_unique[data_tahunajaran.tahun_ajaran]', [
            'is_unique' => 'Tahun Ajaran Sudah Ada!',
            'required' => 'Harap Isi Tahun Ajaran.',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/add_tahunajaran');
        } else {
            $data = [
                'tahun_ajaran' => htmlspecialchars($this->input->post('tahun_ajaran', true)),
            ];

            $this->db->insert('data_tahunajaran', $data);

            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('admin/data_tahunajaran'));
        }
    }

}
