<?php

class M_evaluasi extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('evaluasi');
    }

    public function detail_evaluasi($id_evaluasi = null)
    {
        $query = $this->db->get_where('evaluasi', array('id_evaluasi' => $id_evaluasi))->row();
        return $query;
    }

    public function delete_evaluasi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_evaluasi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function kuis()
    {
        $jenis_evaluasi = 'Kuis';
        $this->db->where('jenis_evaluasi', $jenis_evaluasi);
        return $this->db->get('evaluasi');
    }

    public function ujian()
    {
        $jenis_evaluasi = 'Ujian';
        $this->db->where('jenis_evaluasi', $jenis_evaluasi);
        return $this->db->get('evaluasi');
    }


}
