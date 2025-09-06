<?php
    echo "Kode Program PHP";
    echo "<hr>";

    function persegi($sisi) {
        $luas = $sisi * $sisi;
        return $luas;
    }

    $alas = 6;
    $tinggi = 8;

    function sisi_miring_segitiga($alas, $tinggi) {
        $sisi_miring = sqrt(($alas * $alas) + ($tinggi * $tinggi));
        return $sisi_miring;
    }
    function luas_segitiga($alas, $tinggi) {
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
    }
    function keliling_segitiga($alas, $tinggi) {
        $sisi_miring = sisi_miring_segitiga($alas, $tinggi);
        $keliling = $alas + $tinggi + $sisi_miring;
        return $keliling;
    }

    echo "Alas segitiga: $alas<br>";
    echo "Tinggi segitiga: $tinggi<br>";
    echo "Sisi miring segitiga: ". sisi_miring_segitiga($alas, $tinggi) ."<br>";
    echo "Luas segitiga: ". luas_segitiga($alas, $tinggi) ."<br>";
    echo "Keliling segitiga: ". keliling_segitiga($alas, $tinggi) ."<br>";
?>