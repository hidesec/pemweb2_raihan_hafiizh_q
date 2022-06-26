<?php
Class Dosen_model extends CI_Model {
	public $nidn;
	public $nama;
	public $gender;
	public $tgl_lahir;
	public $tmp_lahir;
	public $pendidikan_akhir;
	public $prodi_kode;

	public function get_dosen(){
		$this->db->select('dsn.nidn "NIDN",
		dsn.nama "NAMA_DSN",
		dsn.gender "GENDER",
		dsn.tgl_lahir "TGL_LAHIR",
		dsn.tmp_lahir "TMP_LAHIR",
		dsn.pendidikan_akhir "PENDIDIKAN_AKHIR",
		prd.nama "NAMA_PRODI",
		prd.kaprodi "KAPRODI"');
		$this->db->from('dosen dsn');
		$this->db->join('prodi prd', 'prd.kode=dsn.prodi_kode', 'left');
		$query = $this->db->get();
		if($query->num_rows() !== 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	public function create_dosen(){
		$data = array(
			'nidn' => $this->nidn,
			'nama' => $this->nama,
			'gender' => $this->gender,
			'tgl_lahir' => $this->tgl_lahir,
			'tmp_lahir' => $this->tmp_lahir,
			'prodi_kode' => $this->prodi_kode,
			'pendidikan_akhir' => $this->pendidikan_akhir,
		);

		$this->db->insert('dosen', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	public function get_dosen_id($nidn){
		$condition = "dsn.nidn = "."'".$nidn."'";
		$this->db->select('dsn.nidn "NIDN",
		dsn.nama "NAMA_DSN",
		dsn.gender "GENDER",
		dsn.tgl_lahir "TGL_LAHIR",
		dsn.tmp_lahir "TMP_LAHIR",
		dsn.pendidikan_akhir "PENDIDIKAN_AKHIR",
		prd.nama "NAMA_PRODI",
		prd.kaprodi "KAPRODI"');
		$this->db->from('dosen dsn');
		$this->db->join('prodi prd', 'prd.kode=dsn.prodi_kode', 'left');
		$this->db->where($condition);
		$query = $this->db->get();
		if($query->num_rows() !== 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	public function update_dosen($nidn){
		$data = array(
			'nama' => $this->nama,
			'gender' => $this->gender,
			'tgl_lahir' => $this->tgl_lahir,
			'tmp_lahir' => $this->tmp_lahir,
			'prodi_kode' => $this->prodi_kode,
			'pendidikan_akhir' => $this->pendidikan_akhir,
		);

		$this->db->where('nidn', $nidn);
		$this->db->update('dosen', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	public function delete_dosen($nidn){
		$this->db->delete('dosen', array('nidn' => $nidn));
	}
}
