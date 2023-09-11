<?php
/**
 * 
 */
class PrestasiModel {

	private $table = 'tbl_prestasi';
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function getAllPrestasi()
	{
		$this->db->query(' SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function TambahDataPrestasi($data)
	{		
		$query = 'INSERT INTO ' . $this->table . ' (Id_Ekskul, Id_Pengguna, Nama_Prestasi, Waktu, Deskripsi, Foto) VALUES (:Id_Ekskul, :Id_Pengguna, :Nama_Prestasi, :Waktu, :Deskripsi, :Foto)';

		$this->db->query($query);

		$this->db->bind('Id_Ekskul',$data['id_ekskul']);
		$this->db->bind('Id_Pengguna',$data['id_pengguna']);
		$this->db->bind('Nama_Prestasi',$data['nama_prestasi']);
		$this->db->bind('Waktu',$data['waktu']);
		$this->db->bind('Deskripsi',$data['deskripsi']);
		$this->db->bind('Foto',$data['foto']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function HapusDataPrestasi($id_pengguna)
	{		
		$query = 'DELETE FROM ' . $this->table . ' WHERE Id_Pengguna = :Id_Pengguna';

		$this->db->query($query);
		$this->db->bind('Id_Pengguna',$id_pengguna);
		$this->db->execute();
		return $this->db->rowCount();
	}
}