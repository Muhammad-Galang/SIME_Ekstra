<?php
/**
 * 
 */
class EkstrakurikulerModel {

	private $table = 'tbl_ekstrakurikuler';
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function getAllEkstrakurikuler()
	{
		$this->db->query(' SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function TambahDataEkstrakurikuler($data)
	{			
		$query = 'INSERT INTO ' . $this->table . ' (Nama_Ekskul, Visi_Ekskul, Misi_Ekskul, Logo_Ekskul) VALUES (:Nama_Ekskul, :Visi_Ekskul, :Misi_Ekskul, :Logo_Ekskul)';


		$this->db->query($query);
		$this->db->bind('Nama_Ekskul',$data['nama_ekskul']);
		$this->db->bind('Visi_Ekskul',$data['visi_ekskul']);
		$this->db->bind('Misi_Ekskul',$data['misi_ekskul']);
		$this->db->bind('Logo_Ekskul',$data['logo_ekskul']);

		$this->db->execute();
		return $this->db->rowCount();



	}

	public function HapusDataEkstrakurikuler($id_ekskul)
	{
		$query = 'DELETE FROM ' . $this->table . ' WHERE Id_Ekskul = :Id_Ekskul';

		$this->db->query($query);
		$this->db->bind(':Id_Ekskul',$id_ekskul);
		$this->db->execute();
		return $this->db->rowCount();
	}

}