<?php
   
//class mawar
class mawar{
  //menentukan property dengan protecd
  protected $nama = "mawar";
  
//method protected
  protected function nama(){
    return"Nama saya " .$this->nama;
  }
  
  public function tampilkan_nama (){
    return $this->tampilkan_nama; 
  }
  
}

//instansiasi class mawar 
$mawar = new mawar();

//memanggil method public tampilkan_nama dari class mawar
echo $mawar->tampilkan_nama();

 ?>
 