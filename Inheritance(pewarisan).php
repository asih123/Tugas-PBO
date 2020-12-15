<?php
   //class rosa mister lincoln
   class mawar{
     
     //property class mawar
     public $nama_saya;
     //method pada class mawar
     
     function berinama ($saya){
          $this->nama_saya=$saya;
             
    }
        
        
        
   }
   
   
   //class turunan atau sub class dari class mawar
   //kita menghubungkan class dengan syntax extends
   
   class teman extends mawar{
     
    //property class teman
    
    public $nama_teman;
     
     //method pada class teman
     function berinamateman($teman) {
     $this->nama_teman=$teman;
     
     
     }
   }

//instansiasi class warna
$mawar = new teman;
//method berinama adalah method pada class mawar tapi kiya bisa mengubahnya
$mawar->berinama(" MAWAR MERAH");
$mawar->berinamateman("Mawar Putih ");

// menampilkan isi property
echo "Nama saya : " . $mawar->nama_saya . "<br/>";
echo "Nama temen saya : " . $mawar->nama_teman;
 ?>