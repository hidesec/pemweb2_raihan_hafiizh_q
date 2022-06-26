<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('dosen_model', 'dsn1');

		$this->load->model('dosen_model', 'dsn2');

		$this->load->model('dosen_model', 'dsn3');
	}

	public function index(){
		$this->dsn1->id = 1;
		$this->dsn1->nama = "James";
		$this->dsn1->gender = "L";
		$this->dsn1->tmp_lahir = "Jakarta";
		$this->dsn1->tgl_lahir = "01-04-1982";
		$this->dsn1->nidn = "0200010";
		$this->dsn1->pendidikan = "Strata 2";

		$this->dsn2->id = 2;
		$this->dsn2->nama = "Loan";
		$this->dsn2->gender = "L";
		$this->dsn2->tmp_lahir = "Surabaya";
		$this->dsn2->tgl_lahir = "25-09-1980";
		$this->dsn2->nidn = "0200020";
		$this->dsn2->pendidikan = "Strata 2";

		$this->dsn3->id = 3;
		$this->dsn3->nama = "Jane";
		$this->dsn3->gender = "P";
		$this->dsn3->tmp_lahir = "Malang";
		$this->dsn3->tgl_lahir = "01-03-1974";
		$this->dsn3->nidn = "0200030";
		$this->dsn3->pendidikan = "Strata 3";

		$list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
	 	$data['list_dsn']=$list_dsn;

	 	$this->load->view('header');
	 	$this->load->view('dosen/index',$data);
	 	$this->load->view('footer');
	}
}
