<?php
/**
 * 
 */
class SiswaModel {

	private $table = 'tbl_siswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function getAllSiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function TambahDataSiswa($data)
	{		
		$query = 'INSERT INTO ' . $this->table . ' (Id_Memilih_Ekskul, Id_Pengguna,Id_Ekskul,Tahun,Tanggal_Terdata) VALUES (:Id_Memilih_Ekskul, :Id_Pengguna, :Id_Ekskul, :Tahun, :Tanggal_Terdata)';

		$this->db->query($query);
		$this->db->bind('Id_Memilih_Ekskul',$data['id_memilih_ekskul']);
		$this->db->bind('Id_Pengguna',$data['id_pengguna']);
		$this->db->bind('Id_Ekskul',$data['id_ekskul']);
		$this->db->bind('Tahun',$data['tahun']);
		$this->db->bind('Tanggal_Terdata',$data['tanggal_terdata']);
		
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function HapusDataSiswa($id_pengguna)
	{		
		$query = 'DELETE FROM ' . $this->table . ' WHERE Id_Memilih_Ekskul = :Id_Memilih_Ekskul';

		$this->db->query($query);
		$this->db->bind('Id_Memilih_Ekskul',$id_pengguna);
		$this->db->execute();
		return $this->db->rowCount();
	}
}