<?php
/**
 * 
 */
class PembimbingModel {

	private $table = 'tbl_pembimbing';
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function getAllPembimbing()
	{
		$this->db->query(' SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function TambahDataPembimbing($data)
	{		
		$query = 'INSERT INTO ' . $this->table . ' (Id_Pengguna, Tahun , Tanggal_Terdata) VALUES (:Id_Pengguna, :Tahun, :Tanggal_Terdata)';

		$this->db->query($query);
		$this->db->bind('Id_Pengguna',$data['id_pengguna']);
		$this->db->bind('Tahun',$data['tahun']);
		$this->db->bind('Tanggal_Terdata',$data['tanggal_terdata']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function HapusDataPembimbing($id_pembimbing)
	{		
		$query = 'DELETE FROM ' . $this->table . ' WHERE Id_Pembimbing = :Id_Pembimbing';

		$this->db->query($query);
		$this->db->bind('Id_Pembimbing',$id_pembimbing);
		$this->db->execute();
		return $this->db->rowCount();
	}

	
}