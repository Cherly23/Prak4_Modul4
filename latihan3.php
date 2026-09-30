<?php
class Mahasiswa {

    public $nama;
    public $prodi;

    public function __construct($nama, $prodi)
    {
        $this->nama = $nama;
        $this->prodi = $prodi;
    }
    public function tampilkanData(){
        echo "<br>Nama : ".$this->nama . "<br>";
        echo "<br>Prodi : ".$this->prodi . "<br>";
    }
}
$mhs1 = new Mahasiswa(
    "cherly",
    "Sistem Informasi"
);

$mhs2 = new Mahasiswa(
    "cheria",
    "Psikologi"
);
$mhs1->tampilkanData();
echo "<br>";
$mhs2->tampilkanData();
?>