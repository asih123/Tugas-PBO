<?php
   //class mawar
   class mawar{
     //prop
     
     public $nama;
     public $warna;
     
     
     //method manusia
     
     function tampilkan_nama(){  
       return "Nama saya mawar <br/>";
       
       
     }
     
   }
   
   //instansiasi class mawar
   
   $mawar = new mawar ();
   //memanggil method  tampilkan_nama dari class mawar
echo $mawar->tampilkan_nama();
   
 ?>