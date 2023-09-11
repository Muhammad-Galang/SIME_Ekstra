<?php
/**
 * 
 */
class LaporanModel {

	private $table = 'tbl_laporan';
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function getAllUser()
	{
		$this->db->query(' SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}
}