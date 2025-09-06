<?php
    echo "Kode Program PHP";
    echo "<hr>";

    function persegi($sisi) {
        $luas = $sisi * $sisi;
        return $luas;
    }

    function segitiga($alas, $tinggi) {
        $sisi_miring = sqrt(($alas * $alas) + ($tinggi * $tinggi));
        return $sisi_miring;
    }

    echo "Luas persegi dengan sisi 8 adalah " . persegi(8);
    echo "<br><br>"; 
    echo "Sisi miring segitiga dengan alas 6 dan tinggi 8 adalah " . segitiga(6, 8);
?>