<?php

    // Yang diketahui
    $hari1 = 36;
    $pekerja1 = 12;
    $pekerja2 = 24;

    // Operasi matematika untuk menghitung jumlah hari yang dibutuhkan 
    $hasil1 = $hari1 * $pekerja1;
    $hasilX = $hasil1 / $pekerja2;

    // Menampilkan ke dalam browser
    echo "$hari1 Hari = $pekerja1 Pekerja <br>";
    echo "X hari = $pekerja2 Pekerja <br>";
    echo "X = ...? <br>";
    echo "Jawaban : x = ($hari1 x $pekerja1) / $pekerja2 <br>
    &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; = $hasil1 / $pekerja2 <br>
    &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; = $hasilX <br><br>";
    echo "Jadi hari yang dibutuhkan adalah $hasilX hari."
    
?>