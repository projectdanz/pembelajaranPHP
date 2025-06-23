<?php
// cara mengeluarkan sebuah nilai, kita ketikan perintah echo
echo "hello world <br>";

// cara membuat mendeklarasikan variabel adalah dengan tanda dollar $ setelah itu nama variabelny
$data = "ini sebuah variabel <br>";

echo "<hr>";
//mengenal type data di php

//type data string = character
$stringv1 = "ini type data string <br>";
$stringv2 = 'ini type data string menggunakan petik satu <br>';

echo $stringv1 . $stringv2;

//type data integer = number/angka
$integer = 12345678;

echo $integer . "<br>";

//type data float = bilangan desimal
$float = 2.14;

echo $float . "<br>";

//type data Boolean hanya punya dua value TRUE or FALSE
$boolean = true;

echo $boolean;
//dapat dipanggil juga menggunakan var_dump: digunakan untuk mengeluarkan valueny dan juga typedata-nya
var_dump($boolean);
echo "<br>";

echo "<hr>";
//PHP aritmetic operator
$a = "10";
$b = "5";

//adition 
echo $a + $b;
echo "<br>";

//subtration
echo $a - $b;
echo "<br>";

//multiplication
echo $a * $b;
echo "<br>";

//division
echo $a / $b;
echo "<br>";


//modulus
echo $a % $b;
echo "<br>";

//exponetiation
echo $a ** $b;
echo "<br>";

//PHP aritmaetic dapat kita gunakan di typedata string maupun integer, yang terpenting itu adalah sebuah angka, tapi jika ingin menggabungkan 2 buah sukukata kita dapat menggunakan titik( . )
$namaDepan = "Masura";
$namaBelakang = "Dani";
echo $namaDepan . " " . $namaBelakang;

echo "<hr>";
//PHP assignment operator
$a = 10;
$b = 20;

echo $a = $b;   // x = y
echo "<br>";
echo $a += $b;   // x = x + y
echo "<br>";
echo $a -= $b;   // x = x - y
echo "<br>";
echo $a *= $b;   // x = x * y
echo "<br>";
echo $a /= $b;   // x = x / y
echo "<br>";
echo $a %= $b;   // x = x % y

echo "<hr>";

//php comparison operator
$data = 6;
$data2 = 6;

// equal: mengecek nilai tanpa mengecek type datanya
if ($data == $data2) {
    echo "ini sudah benar <br>";
} else {
    echo "ini salah <br>";
}

//identical: mengecek nilainy dan juga typedatanya
if ($data === $data2) {
    echo "ini sudah benar <br>";
} else {
    echo "ini salah <br>";
}

//not equal: kondisi ketika tidak sama dengan
if ($data != $data2) {
    echo "ini tidak sama <br>";
} else {
    echo "ini sama dengan <br>";
}

// php greater than or equal
$a = 5;
$b = 5;

if ($a > $b) {
    echo "ini pakai greater than <br>";
} elseif ($a >= $b) {
    echo "ini pakai greater than or equal <br>";
} else {
    echo "ini salah <br>";
}

// php less than or equal
if ($a < $b) {
    echo "ini pakai less than <br>";
} elseif ($a <= $b) {
    echo "ini pakai less than or equal <br>";
} else {
    echo "ini salah <br>";
}

echo "<hr>";

// php if else

$data1 = 5;
$data2 = 6;

if ($data1 > $data2) {
    echo "data 1 lebih besar dari data 2";
} else {
    echo "data 2 lebih besar dari data 1";
}

echo "<br>";
// php if elseif else: digunakan saat ada 3 atau lebih kondisi yang diinginkan

$a = 20;
$b = 20;

if ($a > $b) {
    echo "a lebih besar dari b";
} elseif ($a < $b) {
    echo "a lebih kecil dari b";
} else {
    echo "a dan b nilainy sama";
}

echo "<br>";

//PHP switch statment 
$waktu = "pagi";

switch ($waktu) {
    case "pagi":
        echo "ini waktu pagi";
        break;
    case "siang":
        echo "ini waktu siang";
        break;
    case "sore":
        echo "ini waktu sore";
        break;
    case "malam":
        echo "ini waktu malam";
        break;
    default:
        echo "waktu tidak ditemukan";
}

echo "<hr>";

//PHP loops 

// while loop: digunakan saat kondisi dicek diawal
$a = 1;

while ($a <= 5) {
    echo "angka ke-$a <br>";
    $a++;
}

echo "<hr>";

// do...while: menjalankan blok kode baru mengecek kondisiny
$a = 1;
do {
    echo "angka ke-$a <br>";
    $a++;
} while ($a <= 10);

echo "<hr>";

// for loop 

for ($a = 1; $a <= 20; $a++) {
    echo "angka ke-$a <br>";
}

echo "<hr>";

// foreach 

$array = [
    "apel",
    "mangga",
    "jeruk",
    "semangka"
];

foreach ($array as $b) {
    echo "saya suka buah $b<br>";
}

echo "<hr>";

//function 

function myMessage()
{
    echo "hello world via function";
}

myMessage(); // cara memanggil function

echo "<br>";

function myName($a)
{
    echo "hello $a";
}


myName("masura"); // cara memanggil function dan mengisi parameternya

echo "<br>";

$angka1 = 10;
$angka2 = 20;

function jumlah($a, $b)
{
    return $a + $b;
}

$data = jumlah($angka1, $angka2);
echo "hasil dari $angka1 + $angka2 adalah $data";


echo "<br>";

// function default
function contoh($nama = "masura")
{
    echo "hello $nama";
}

contoh("Dani");

echo "<br>";

// global dan local scope

$global = "Masura"; //global scope

function nama()
{
    global $global; // cara memenggil $variabel global scope
    $local = "Dani"; // local scope

    return "hello" . " " . $global . " " . $local;
}

$fungsi = nama();
echo $fungsi;

echo "<hr>";


// PHP Array


//indexed Array 
$buah = array("apel", "semangka", "mangga");
echo $buah[2];

echo "<br>";

$buah[2] = "anggur"; //Update array
echo $buah[2];

unset($buah[0]); // Menghapus Array
print_r($buah);

echo "<hr>";



//Assosiactive Array
$umur = [
    "Masura" => 15,
    "bambang" => 20,
    "paijo" => 30,
];
echo $umur["paijo"];

echo "<br>";

$umur["paijo"] = 18; //Update array
echo $umur["paijo"];

echo "<hr>";



//Multidimensional Array
$santri = [
    ["Masura", "Programmer", 19],
    ["Fathin", "Programmer", 15],
    ["luthfi", "Multimedia", 19]
];

echo $santri[0][0];
echo $santri[1][1];
echo $santri[2][2];

echo "<br>";

$santri[2][2] = 25; //Update array
echo $santri[2][2];

// Hapus array dengan array_splice
$nomor = array(10, 20, 30, 40, 50);
array_splice($nomor, 1, 3);
print_r($nomor);

function helo() {
    echo "helloword";
} 