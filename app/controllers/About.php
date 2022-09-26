<?php 
  class About extends Controller{
    public function index( $name = "User" , $pekerjaan = "Unknown" ){
      // echo "Halo nama saya $name saya seorang $pekerjaan";
      $data["name"] = $name;
      $data["pekerjaan"] = $pekerjaan;
      
      $data["judul"] = 'About Me';
      $this->view('templates/header', $data);
      $this->view('about/index', $data);
      $this->view('templates/footer');
    }

    public function page(){
      // echo "About/page";
      $data["judul"] = "Page";
      $this->view('templates/header', $data);
      $this->view('about/page');
      $this->view('templates/footer');
    }
  }