<?php
/**
 * 
 */
class KepalaSekolahModel {

	private $table = 'tbl_kepala_sekolah';
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function getAllKepsek()
	{
		$this->db->query(' SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function TambahDataKepsek($data)
	{		

		$query = 'INSERT INTO ' . $this->table . ' (Id_Pengguna, Tanggal_Terdata) VALUES (:Id_Pengguna, :Tanggal_Terdata)';

		$this->db->query($query);
		$this->db->bind('Id_Pengguna',$data['id_pengguna']);
		$this->db->bind('Tanggal_Terdata',$data['tanggal_terdata']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function HapusDataKepsek($id_pengguna)
	{		
		$query = 'DELETE FROM ' . $this->table . ' WHERE Id_Kepala = :Id_Kepala';

		$this->db->query($query);
		$this->db->bind('Id_Kepala',$id_pengguna);
		$this->db->execute();
		return $this->db->rowCount();
	}
}