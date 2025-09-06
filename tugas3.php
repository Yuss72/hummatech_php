<?php
    echo "Kode Program PHP - Luas Persegi";
    echo "<hr>";

    // syntax 1
    function luas1($panjang, $lebar) {
        $luas = $panjang * $lebar;
        return $luas;
    }

    function luas2($panjang, $lebar) {
        echo "Luas Persegi 2 = " . luas1($panjang, $lebar);
    }

    $hasil = luas1(10, 5);
    echo "Luas Persegi 1 = " . $hasil;
    echo "<br>";

    luas2(10, 5);
?>