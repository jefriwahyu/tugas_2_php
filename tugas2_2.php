<?php

    // Yang di ketahui 
    $jual = 80000;
    $beli = 50000;

    // Operasi matematika menghitung persentase keuntungan
    $keuntungan = $jual - $beli;
    $keuntunganPersen = ($keuntungan / $beli);
    $keuntunganPersen1 = $keuntunganPersen * 100;

    // Menampilkan hasil ke dalam browser
    echo "Jual = $jual <br>";

    echo "Beli = $beli <br>";

    echo "Keuntungan = ? <br>";

    echo "Jawaban : kr = $jual - $beli<br>
    &emsp;&emsp;&emsp;&emsp;&ensp;&ensp; = $keuntungan <br>";

    echo "&emsp;&emsp;&emsp;&ensp;&nbsp; kp = ($keuntungan / $beli) x 100 % <br>
    &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp; = $keuntunganPersen x 100 % <br>
    &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp; = $keuntunganPersen1 % <br><br>";

    echo "Jadi keuntungan yang didapat adalah $keuntunganPersen1 %.";

?>