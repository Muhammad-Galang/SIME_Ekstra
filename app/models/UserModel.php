<?php
/**
 * 
 */
class UserModel {

	private $table = 'tbl_user';
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

	public function getUserById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE  Id_pengguna=:Id_pengguna');
		$this->db->bind('Id_pengguna',$id);
		return $this->db->single();

	}
	
	public function TambahDataUser($data)
	{
		$query =  'INSERT INTO ' . $this->table . ' (Nama_Lengkap,Nama_Pengguna,Nomer_Induk,Tempat_Lahir,Tanggal_Lahir,Foto_Profil,Level_Pengguna,Kelas,Alamat,Kata_Sandi) VALUES (:Nama_Lengkap,:Nama_Pengguna,:Nomer_Induk,:Tempat_Lahir,:Tanggal_Lahir,:Foto_Profil,:Level_Pengguna,:Kelas,:Alamat,:Kata_Sandi)';

		$this->db->query($query);
		$this->db->bind('Nama_Lengkap',htmlspecialchars($data['nama_lengkap']));
		$this->db->bind('Nama_Pengguna',htmlspecialchars($data['nama_pengguna']));
		$this->db->bind('Nomer_Induk',htmlspecialchars($data['nomer_induk']));
		$this->db->bind('Tempat_Lahir',htmlspecialchars( $data['tampat_lahir']));
		$this->db->bind('Tanggal_Lahir',htmlspecialchars($data['tanggal_lahir']));
		$this->db->bind('Foto_Profil',htmlspecialchars($data['foto_profil']));
		$this->db->bind('Level_Pengguna',htmlspecialchars($data['level_pengguna']));
		$this->db->bind('Kelas',htmlspecialchars($data['kelas']));
		$this->db->bind('Alamat',htmlspecialchars($data['alamat']));
		$this->db->bind('Kata_Sandi',htmlspecialchars($data['kata_sandi']));
		$this->db->execute();

		return $this->db->rowCount();

	}

	public function updateDataUser($data)
	{
		$query = 'UPDATE ' . $this->table . ' SET Nama_Lengkap=:Nama_Lengkap,Nama_Pengguna=:Nama_Pengguna,Nomer_Induk=:Nomer_Induk,Tempat_Lahir=:Tempat_Lahir,Tanggal_Lahir=:Tanggal_Lahir,Foto_Profil=:Foto_Profil,Level_Pengguna=:Level_Pengguna,Kelas=:Kelas,Alamat=:Alamat,Kata_Sandi=:Kata_Sandi WHERE Id_pengguna=:Id_pengguna';

		$this->db->query($query);
		$this->db->bind('Nama_Lengkap', $data['nama_lengkap']);
		$this->db->bind('Nama_Pengguna', $data['nama_pengguna']);
		$this->db->bind('Nomer_Induk', $data['nomer_induk']);
		$this->db->bind('Tempat_Lahir', $data['tampat_lahir']);
		$this->db->bind('Tanggal_Lahir', $data['tanggal_lahir']);
		$this->db->bind('Foto_Profil', $data['foto_profil']); 
		$this->db->bind('Level_Pengguna', $data['level_pengguna']);
		$this->db->bind('Kelas', $data['kelas']);
		$this->db->bind('Alamat', $data['alamat']);
		$this->db->bind('Kata_Sandi', $data['kata_sandi']);
		$this->db->bind('Id_pengguna', $data['id_pengguna']); 

		$this->db->execute();
		return $this->db->rowCount();
	}


	public function HapusDataUser($id)
	{

		$query = 'DELETE FROM ' . $this->table . ' WHERE Id_pengguna = :Id_pengguna';
		$this->db->query($query);
		$this->db->bind('Id_pengguna',$id);
		$this->db->execute();
		return $this->db->rowCount();
	}

	//Menghitung banyak nya user
	public function getCountNamaPengguna()
	{
		$this->db->query('SELECT COUNT(Nama_Pengguna) AS jumlah_pengguna FROM ' . $this->table);
		return $this->db->single();
	}



}