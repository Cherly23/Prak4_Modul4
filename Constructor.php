<?php
class Mahasiswa {

    public function __construct() {
        echo "Object Mahasiswa berhasil dibuat<br>";
    }

}

$mhs = new Mahasiswa();
?>

<?php
class Mahasiswa2 {

 public $nama;

    public function tampilkanNama() {
        echo $this->nama;

    }

}

$mhs1 = new Mahasiswa2();
$mhs1->nama = "Andi<br>";
$mhs1->tampilkanNama();

?>

<?php
class Mahasiswa3 {

    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

}

$mhs1 = new Mahasiswa3("Andi parameter  <br>");
echo $mhs1->nama;
?>
