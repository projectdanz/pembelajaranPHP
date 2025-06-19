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
    echo $namaDepan ." ". $namaBelakang;

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

?>
