<?php

class M_materi extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('materi');
    }

    public function belajar($id = null)
    {
        $query = $this->db->get_where('materi', array('id_materi' => $id))->row();
        return $query;
    }

    public function detail_materi($id_materi = null)
    {
        $query = $this->db->get_where('materi', array('id_materi' => $id_materi))->row();
        return $query;
    }

    public function delete_materi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_materi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function matematika_vii()
    {
        $mapel = 'Matematika';
        $kelas = 'VII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function matematika_viii()
    {
        $mapel = 'Matematika';
        $kelas = 'VIII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function matematika_ix()
    {
        $mapel = 'Matematika';
        $kelas = 'IX';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function ipa_vii()
    {
        $mapel = 'IPA';
        $kelas = 'VII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function ipa_viii()
    {
        $mapel = 'IPA';
        $kelas = 'VIII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function ipa_ix()
    {
        $mapel = 'IPA';
        $kelas = 'IX';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function indo_vii()
    {
        $mapel = 'Bahasa Indonesia';
        $kelas = 'VII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function indo_viii()
    {
        $mapel = 'Bahasa Indonesia';
        $kelas = 'VIII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function indo_ix()
    {
        $mapel = 'Bahasa Indonesia';
        $kelas = 'IX';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function inggris_vii()
    {
        $mapel = 'Bahasa Inggris';
        $kelas = 'VII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function inggris_viii()
    {
        $mapel = 'Bahasa Inggris';
        $kelas = 'VIII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function inggris_ix()
    {
        $mapel = 'Bahasa Inggris';
        $kelas = 'IX';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function agama_vii()
    {
        $mapel = 'Pendidikan Agama Islam';
        $kelas = 'VII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function agama_viii()
    {
        $mapel = 'Pendidikan Agama Islam';
        $kelas = 'VIII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }

    public function agama_ix()
    {
        $mapel = 'Pendidikan Agama Islam';
        $kelas = 'IX';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_materi', $mapel);
        return $this->db->get('materi');
    }
}
