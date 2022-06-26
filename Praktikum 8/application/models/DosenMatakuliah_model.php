<?php
    require('Dosen_model.php');
	require('Matakuliah_model.php');

	class DosenMatakuliah_model extends CI_Model{
		public $semester;
		public $dosen;
		public $matakuliah;
		public $hari;
		public $ruangan;

//		public function __construct()
//		{
//			parent::__construct();
//			$this->dosen = new Dosen_model();
//			$this->matakuliah = new Matakuliah_model();
//		}
	}
