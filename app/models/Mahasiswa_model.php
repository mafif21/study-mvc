<?php 
  class Mahasiswa_model{
  //   private $mhs = [
  //     [
  //       "nama" => "Dimas Sultan",
  //       "nrp" => "10929883",
  //       "email" => "DimasSultan@gmail.com",
  //       "jurusan" => "Sistem Informasi",
  //     ],
  //     [
  //       "nama" => "Krisna Ayax",
  //       "nrp" => "109298839393",
  //       "email" => "krisnaayax@gmail.com",
  //       "jurusan" => "Ilmu Komunikasi",
  //     ],
  //     [
  //       "nama" => "Aoldino",
  //       "nrp" => "1092984583",
  //       "email" => "aldino@gmail.com",
  //       "jurusan" => "DKV",
  //     ]
  //   ];

    // private $dbh; //database hdandler
    // private $stmt; //statement

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }


    public function getAllMahasiswa(){
      // return $this->mhs;
      $this->db->query('SELECT * FROM ' . $this->table); //kurang spasi
      return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
    }
  }
?>