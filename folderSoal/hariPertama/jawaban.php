<?php
    function tambah ($a, $b) {
        $c = $a + $b;
        echo "ini hasil penjumlahanny: $c";
    }

    function kurang ($a, $b) {
        $c = $a - $b;
        echo "ini hasil penjumlahanny: $c";
    }

    function kali ($a, $b) {
        $c = $a * $b;
        echo "ini hasil penjumlahanny: $c";
    }

    function bagi ($a, $b) {
        $c = $a / $b;
        echo "ini hasil penjumlahanny: $c";
    }

    tambah(5, 5);
    echo "<br>";
    kurang(5, 5);
    echo "<br>";
    kali(5, 5);
    echo "<br>";
    bagi(5, 5);
    echo "<br>";

?>