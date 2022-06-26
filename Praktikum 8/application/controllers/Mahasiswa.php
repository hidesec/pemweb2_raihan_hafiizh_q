<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('mahasiswa_model', 'mhs1');
		$this->load->model('mahasiswa_model','mhs2');
		$this->load->model('mahasiswa_model','mhs3');
	}

	public function index(){
		$this->mhs1->id = 1;
		$this->mhs1->nim='010001';
 		$this->mhs1->nama='Faiz Fikri';
 		$this->mhs1->gender='L';
		$this->mhs1->ipk=3.85;

	 	$this->mhs2->id=2;
	 	$this->mhs2->nim='020001';
	 	$this->mhs2->nama='Pandan Wangi';
	 	$this->mhs2->gender='P';
		$this->mhs2->ipk=3.35;

	 	$list_mhs = [$this->mhs1, $this->mhs2];
	 	$data['list_mhs']=$list_mhs;

	 	$this->load->view('header');
	 	$this->load->view('mahasiswa/index',$data);
	 	$this->load->view('footer');
	}

	public function mahasiswa_kirim(){
		$this->mhs1->id = 1;
		$this->mhs1->nim='010001';
 		$this->mhs1->nama='Faiz Fikri';
 		$this->mhs1->gender='L';
		$this->mhs1->ipk=3.85;

	 	$this->mhs2->id=2;
	 	$this->mhs2->nim='020001';
	 	$this->mhs2->nama='Pandan Wangi';
	 	$this->mhs2->gender='P';
		$this->mhs2->ipk=3.35;

	 	$this->mhs3->id=3;
	 	$this->mhs3->nim=$this->input->post('nim');
	 	$this->mhs3->nama= $this->input->post('nama_mahasiswa');
	 	$this->mhs3->gender= $this->input->post('jenis_kelamin');
		$this->mhs3->ipk= $this->input->post('ipk');

	 	$list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
	 	$data['list_mhs']=$list_mhs;

	 	$this->load->view('header');
	 	$this->load->view('mahasiswa/index',$data);
	 	$this->load->view('footer');
	}
}
