<?php

class M_informasi extends CI_Model{

    public function tampil_data()
    {
        return $this->db->get('data_informasi');
    }

    public function detail_informasi($id = null)
    {
        $query = $this->db->get_where('data_informasi', array('id_informasi' => $id))->row();
        return $query;
    }

    public function delete_informasi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_informasi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function pengumuman()
    {
        $kategori_informasi = 'Pengumuman';
        $this->db->where('kategori_informasi', $kategori_informasi);
        return $this->db->get('data_informasi');
    }

    public function rencana_pembelajaran()
    {
        $kategori_informasi = 'Rencana Pembelajaran';
        $this->db->where('kategori_informasi', $kategori_informasi);
        return $this->db->get('data_informasi');
    }

}