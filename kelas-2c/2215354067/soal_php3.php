<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php

    echo "<h3>Soal Tentukan Nilai </h3>";
    /*
    buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter
    berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik”
    Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar
    sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
    */

    function tentukan_nilai($nilai){
        $kalimat= "" ;
        if ($nilai >= 85 && $nilai<=100) {
            $kalimat = "Sangat Baik";
        }elseif ($nilai >= 70 && $nilai < 85) {
            $kalimat = "Baik";
        }elseif ($nilai >= 60 && $nilai < 70) {
            $kalimat = "Cukup";
        }else{
            $kalimat = "Kurang";
        }
        return $kalimat;
    }

    // Hapus komentar di bawah ini untuk jalankan code
    echo "Niai 98: ".tentukan_nilai(98). "<br>"; //Sangat Baik
    echo "Niai 76: ".tentukan_nilai(76). "<br>"; //Baik
    echo "Niai 67: ".tentukan_nilai(67). "<br>"; //Cukup
    echo "Niai 43: ".tentukan_nilai(43). "<br>"; //Kurang
    ?>
</body>
</html>

