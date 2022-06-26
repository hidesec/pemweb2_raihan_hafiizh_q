<?php
Class Mahasiswa_model extends CI_Model {
	public $nim;
	public $nama;
	public $gender;
	public $tmp_lahir;
	public $tgl_lahir;
	public $ipk;
	public $prodi_kode;

	public function get_mahasiswa(){
		$this->db->select('mhs.nidn "NIM",
		mhs.nama "NAMA_MHS",
		mhs.gender "GENDER",
		mhs.tgl_lahir "TGL_LAHIR",
		mhs.tmp_lahir "TMP_LAHIR",
		mhs.ipk "IPK",
		prd.nama "NAMA_PRODI",
		prd.kaprodi "KAPRODI"');
		$this->db->from('mahasiswa mhs');
		$this->db->join('prodi prd', 'prd.kode=mhs.prodi_kode', 'left');
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

	public function create_mahasiswa(){
		$data = array(
			'nidn' => $this->nim,
			'nama' => $this->nama,
			'gender' => $this->gender,
			'tgl_lahir' => $this->tgl_lahir,
			'tmp_lahir' => $this->tmp_lahir,
			'prodi_kode' => $this->prodi_kode,
			'ipk' => $this->ipk,
		);
		$this->db->insert('mahasiswa', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	public function get_mahasiswa_id($nim){
		$condition = "mhs.nidn = "."'".$nim."'";
		$this->db->select('mhs.nidn "NIM",
		mhs.nama "NAMA_MHS",
		mhs.gender "GENDER",
		mhs.tgl_lahir "TGL_LAHIR",
		mhs.tmp_lahir "TMP_LAHIR",
		mhs.ipk "IPK",
		prd.nama "NAMA_PRODI",
		prd.kaprodi "KAPRODI"');
		$this->db->from('mahasiswa mhs');
		$this->db->join('prodi prd', 'prd.kode=mhs.prodi_kode', 'left');
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

	public function update_mahasiswa($nim){
		$data = array(
			'nama' => $this->nama,
			'gender' => $this->gender,
			'tgl_lahir' => $this->tgl_lahir,
			'tmp_lahir' => $this->tmp_lahir,
			'prodi_kode' => $this->prodi_kode,
			'ipk' => $this->ipk,
		);

		$this->db->where('nidn', $nim);
		$this->db->update('mahasiswa', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	public function delete_mahasiswa($nim){
		$this->db->delete('mahasiswa', array('nidn' => $nim));
	}
}
