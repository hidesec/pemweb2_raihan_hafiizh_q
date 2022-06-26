<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('matakuliah_model', 'matkul1');

		$this->load->model('matakuliah_model', 'matkul2');

		$this->load->model('matakuliah_model', 'matkul3');

	}
	public function index() {
		$this->matkul1->id = 1;
		$this->matkul1->nama = "Pemrograman Web";
		$this->matkul1->sks = 2;
 		$this->matkul1->kode = "PEMWEB534";

		$this->matkul2->id = 2;
		$this->matkul2->nama = "Sistem Operasi";
		$this->matkul2->sks = 3;
 		$this->matkul2->kode = "OS921";

		$this->matkul3->id = 1;
		$this->matkul3->nama = "Dasar-Dasar Pemrograman";
		$this->matkul3->sks = 2;
 		$this->matkul3->kode = "DDP290";

		$list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3];
	 	$data['list_matkul']=$list_matkul;

	 	$this->load->view('header');
	 	$this->load->view('matakuliah/index',$data);
	 	$this->load->view('footer');
	}
}
