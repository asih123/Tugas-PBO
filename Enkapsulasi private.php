<?php
   //class mawar
   class mawar{
     //menentukan property dengan private
     
     private $nama = "Merah";
     
     
     //method public
     
     public function tampilkan_nama(){  
       return "Nama saya mawar " .$this->nama;
       
       
     }
     
   }
   
   //instansiasi class mawar
   
   $mawar = new mawar ();
   //memanggil method  public tampilkan_nama dari class mawar
echo $mawar->tampilkan_nama();
   
 ?>