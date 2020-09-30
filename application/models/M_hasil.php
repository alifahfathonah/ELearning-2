<?php

class M_hasil extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('hasil_evaluasi');
    }


    public function detail_hasil($id = null)
    {
        $query = $this->db->get_where('hasil_evaluasi', array('id_hasilevaluasi' => $id))->row();
        return $query;
    }

    public function delete_hasil($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_hasil($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function nilai()
    {
        $nis = $this->input->post('nis');
        $this->db->where('nis', $nis);
        return $this->db->get('hasil_evaluasi');
    }


}
