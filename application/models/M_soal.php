<?php

class M_soal extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('soal');
    }


    public function detail_soal($id_soal = null)
    {
        $query = $this->db->get_where('soal', array('id_soal' => $id_soal))->row();
        return $query;
    }

    public function delete_soal($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_soal($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function AmbilJawaban($kode = 0) {
        $data = $this->db->query("select * from soal where id_soal = '$kode'")->result_array();
        return $data[0]['kunci'];
      }


}
