<?php

class LoginModel {
	
	private $table = 'tbl_user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function checkLogin($data)
	{
		$query = 'SELECT * FROM ' . $this->table . '  WHERE Nama_Pengguna = :Nama_Pengguna AND Kata_Sandi = :Kata_Sandi';
		$this->db->query($query);
		$this->db->bind('Nama_Pengguna', $data['nama_pengguna']);
		$this->db->bind('Kata_Sandi', $data['kata_sandi']);
		// $this->db->execute();
		//return $this->db->rowCount();
		$data =  $this->db->single();
		return $data;
	}

}