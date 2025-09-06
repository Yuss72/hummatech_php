<?php
    // Jawaban dari pertanyaan tugas satu outputnya adalah 'Isi variable bulan adalah Maret'
    // Karena variable bulan menunjukkan nomor 3
    $bulan = 3;
    switch ($bulan) {
        case 1:
            echo "Isi variable bulan adalah January";
            break;
        case 2:
            echo "Isi variable bulan adalah February";
            break;
        case 3:
            echo "Isi variable bulan adalah Maret";
            break;
        case 4:
            echo "Isi variable bulan adalah April";
            break;
        case 5:
            echo "Isi variable bulan adalah Mei";
            break;
        default:
            echo "Isi variable tidak di temukan";
    }
?>