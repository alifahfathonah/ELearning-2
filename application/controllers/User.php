<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // $this->session->set_flashdata('not-login', 'Gagal!');
        // if (!$this->session->userdata('email')) {
        //     redirect('welcome');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('template/nav_user');
        $this->load->view('user/index');
        $this->load->view('template/footer');
    }

    public function nilai()
    {
        $this->load->model('m_hasil');
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $data['hasil'] = $this->m_hasil->tampil_data()->result();
        $this->load->view('template/nav_user');
        $this->load->view('user/nilai', $data);
        $this->load->view('template/footer');
    }

    public function evaluasi()
    {
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('template/nav_user');     
        $this->load->view('user/evaluasi');
        $this->load->view('template/footer');
    }

    public function kelas7()
    {
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('template/nav_user');
        $this->load->view('user/kelas7');
        $this->load->view('template/footer');
    }

    public function kelas8()
    {
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('template/nav_user');
        $this->load->view('user/kelas8');
        $this->load->view('template/footer');
    }

    public function kelas9()
    {
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('template/nav_user');
        $this->load->view('user/kelas9');
        $this->load->view('template/footer');
    }

    public function pengumuman()
    {
        $this->load->model('m_informasi');
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $data['informasi'] = $this->m_informasi->pengumuman()->result();
        $this->load->view('template/nav_user');
        $this->load->view('user/pengumuman', $data);
        $this->load->view('template/footer');
    }

    public function rencana_pembelajaran()
    {
        $this->load->model('m_informasi');
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $data['informasi'] = $this->m_informasi->rencana_pembelajaran()->result();
        $this->load->view('template/nav_user');
        $this->load->view('user/rencana_pembelajaran', $data);
        $this->load->view('template/footer');
    }

    public function detail_informasi($id)
    {
        $this->load->model('m_informasi');
        $where = array('id' => $id);
        $detail = $this->m_informasi->detail_informasi($id);
        $data['detail'] = $detail;
        $this->load->view('template/nav_user');
        $this->load->view('user/detail_informasi', $data);
        $this->load->view('template/footer');
    }

    public function kuis()
    {
        $this->load->model('m_evaluasi');
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $data['user'] = $this->m_evaluasi->kuis()->result();
        $this->load->view('template/nav_user');
        $this->load->view('user/kuis', $data);
        $this->load->view('template/footer');
    }

    public function ujian()
    {
        $this->load->model('m_evaluasi');
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $data['user'] = $this->m_evaluasi->ujian()->result();
        $this->load->view('template/nav_user');
        $this->load->view('user/ujian', $data);
        $this->load->view('template/footer');
    }

    public function soal($id_evaluasi)
    {
        $this->load->model('m_evaluasi');
        $data['user'] = $this->db->get_where('data_siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $where = array('id_evaluasi' => $id_evaluasi);
        $detail = $this->m_evaluasi->detail_evaluasi($id_evaluasi);
        $data['detail'] = $detail;
        $this->load->view('template/nav_user');
        $this->load->view('user/soal', $data);
        $this->load->view('template/footer');
    }

    public function submit_evaluasi()
    {
        
        
         
            $upload_lampiran = $_FILES['lampiran'];

            if ($upload_lampiran) {
                $config['allowed_types'] = '*';
                $config['max_size'] = '0';
                $config['upload_path'] = './assets/evaluasi_file_siswa';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('lampiran')) {
                    $lampiran = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }
            $data = [
                'id_hasilevaluasi' => htmlspecialchars($this->input->post('id_hasilevaluasi', true)),
                'nis' => htmlspecialchars($this->input->post('nis', true)),
                'jawaban' => htmlspecialchars($this->input->post('jawaban', true)),
                'lampiran' => $lampiran,
                'id_evaluasi' => htmlspecialchars($this->input->post('id_evaluasi', true)),
            ];

            $this->db->insert('hasil_evaluasi', $data);
            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('user/kuis'));
        
    }

    public function registration()
    {
        $this->load->view('template/nav');
        $this->load->view('user/registration');
        $this->load->view('template/footer');
    }

    public function login()
    {
        $this->load->view('template/nav');
        $this->load->view('login');
        $this->load->view('template/footer');
    }

    public function registration_act()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom username.',
            'min_length' => 'Nama terlalu pendek.',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[siswa.email]', [
            'is_unique' => 'Email ini telah digunakan!',
            'required' => 'Harap isi kolom email.',
            'valid_email' => 'Masukan email yang valid.',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[retype_password]', [
            'required' => 'Harap isi kolom Password.',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek',
        ]);
        $this->form_validation->set_rules('retype_password', 'Password', 'required|trim|matches[password]', [
            'matches' => 'Password tidak sama!',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/nav');
            $this->load->view('user/registration');
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                //'is_active' => 1,
                //'date_created' => time(),
            ];

            //siapkan token

            // $token = base64_encode(random_bytes(32));
            // $user_token = [
            //     'email' => $email,
            //     'token' => $token,
            //     'date_created' => time(),
            // ];

            $this->db->insert('data_siswa', $data);
            // $this->db->insert('token', $user_token);

            // $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('welcome'));
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'ini email disini',
            'smtp_pass' => 'Isi Password gmail disini',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        $this->email->initialize($config);

        $data = array(
            'name' => 'syauqi',
            'link' => ' ' . base_url() . 'welcome/verify?email=' . $this->input->post('email') . '& token' . urlencode($token) . '"',
        );

        $this->email->from('LearnifyEducations@gmail.com', 'Learnify');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $link =
            $this->email->subject('Verifikasi Akun');
            $body = $this->load->view('template/email-template.php', $data, true);
            $this->email->message($body);
        } else {
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die();
        }
    }

    

}
