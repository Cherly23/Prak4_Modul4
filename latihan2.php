<?php
class Mahasiswa {

    public $nama;
    public $prodi;

    public function __construct()
    {
        $this->nama = "Cherly";
        $this->prodi = "Sistem Informasi";
    }
    public function tampilkanData(){
        echo "<br>Nama : ".$this->nama . "<br>";
        echo "<br>Prodi : ".$this->prodi;
    }
}
$mhs1 = new Mahasiswa();
$mhs1->tampilkanData();
?>