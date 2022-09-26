<?php 
  class About {
    public function index( $name = "User" , $pekerjaan = "Unknown" ){
      echo "Halo nama saya $name saya seorang $pekerjaan";
    }

    public function page(){
      echo "About/page";
    }
  }