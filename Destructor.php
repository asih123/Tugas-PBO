<?php
   //PHP OOP part 2 pengertian class, object, property dan method
//class mawar
class mawar{
  //property
  var $nama;
  var $warna;
  
  
  //method construct dijalankan pertama kali
  function __construct(){
   echo "ini adalah isi method construct <br/>";    
  }
  
  
  //method destruct dijalanlan terakhir kali
  
  function __destruct(){
   echo "ini adalah isi method destruct <br/>";    
  }
  
  
  
  //method mawar
  function tampilkan_nama() {
    return "Nama saya mawar <br/>";  
  }
  function warna_pigmen() {
    return "Warna pigmen saya merah <br/>";   
  } 
}

//instansiasi class mawar
$mawar = new mawar();
//memanggil method  tampilkan_nama dari class mawar
echo $mawar->tampilkan_nama();
 ?>