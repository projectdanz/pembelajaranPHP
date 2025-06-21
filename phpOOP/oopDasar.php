<?php
class buah {
    // properti
    public $namaToko;
    public $namaBuah;

    // method
    function set_toko($toko){
        $this->namaToko = $toko;
    }

    function get_toko(){
        return $this->namaToko;
    }

    function set_buah($namaBuah) {
        $this->namaBuah = $namaBuah;
    }

    function get_buah() {
        return $this->namaBuah;
    }
}

$fruit = new buah(); // object

$fruit->set_toko("toko buah segar");
$fruit->set_buah("apel");

echo "Saya membeli buah" . " " . $fruit->get_buah() . " " . "diToko" . " " .$fruit->get_toko();


echo "<hr>";

//function __construct dan __destruct

class oop  {
    public $nama; // properti

    function __destruct() // akan dijalankan terakhir 
    {
        echo "Object {$this->nama} dihancurkan <br>";
    }

    function __construct($nama) // akan dijalankan pertama kali
    {
        $this->nama = $nama;
        echo "Object {$this->nama} dibuat <br>";
    }

}

$nama = new oop("Dani"); // Object

echo "<hr>";

// access modifiers dan inheritance

class induk {
    public $ayah;
    protected $ibu;
    private $anak;


    public function set_ayah ($ayah){
        $this->ayah = $ayah;
    }
    public function set_ibu ($ibu){
        $this->ibu = $ibu;

    }
    public function set_anak ($anak){
        $this->anak = $anak;
    }

    // access private
    public function get_anak() {
        echo $this->anak;
    }
}

class anakan extends induk {
    public function get_ayah() // access public
    {
        echo $this->ayah;
    }
    public function get_ibu() // access protected
    {
        echo $this->ibu;
    }
}

$cabang = new anakan;

$cabang->set_ayah("bambang");
$cabang->set_ibu("rini");
$cabang->set_anak("paijo");

$cabang->get_ayah();
echo "<br>";
$cabang->get_ibu();
echo "<br>";
$cabang->get_anak();

?>