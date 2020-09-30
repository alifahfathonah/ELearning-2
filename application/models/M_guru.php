<?php

class M_guru extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('data_guru');
    }

    public function detail_guru($nuptk = null)
    {
        $query = $this->db->get_where('data_guru', array('nuptk' => $nuptk))->row();
        return $query;
    }

    public function delete_guru($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_guru($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function AmbilDetailNilai($idjawaban) {
		$data = $this->db->query("select * from jawaban_detail a, soal b where a.id_soal=b.id_soal AND a.id_jawaban='$idjawaban'");
		return $data;
	}

	public function AmbilJawabanABCD($kode = 0, $abcd) {
		$data = $this->db->query("select * from soal where id_soal = '$kode'")->result_array();
		if($abcd=='A'){
			return $data[0]['a'];
		}
		else if($abcd=='B'){
			return $data[0]['b'];
		}
		else if($abcd=='C'){
			return $data[0]['c'];
		}
		else if($abcd=='D'){
			return $data[0]['d'];
		}
	}
}
