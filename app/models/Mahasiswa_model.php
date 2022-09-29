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

    private $dbh; //database hdandler
    private $stmt; //statement

    public function __construct(){
      //data source name
      $dsn = "mysql:host=localhost;dbname=phpmvc";

      try {
        $this->dbh = new PDO($dsn, 'root', '');

      } catch (PDOException $e) {
        //throw $th;
        die($e->getMessage());
      }
    }


    public function getAllMahasiswa(){
      // return $this->mhs;
      $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
      $this->stmt->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }
?>