<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>String Exercises</title>
        <style>
            li {
                margin-bottom: 30px;
            }

            label {
                font-weight: bold;
            }

        
        </style>
    </head>
    <body>
        <h1>Latihan String</h1>
        <ol>
            
            <li  style="margin-bottom: 10px;">
                <label for="formSentence"> Form Sentence</label>
                <p id="formSentence"></p>
            </li>
            <li>
                <label for="breakSentence" >Break Sentence</label>
                <p id="firstWord"></p> 
                <p id="secondWord"></p> 
                <p id="thirdWord"></p> 
                <p id="fourthWord"></p> 
                <p id="fifthWord"></p> 
            </li>
            <li id="breakWord">
                <label for="breakWord" >Break Word</label>
                <p id="firstWord3"></p> 
                <p id="secondWord3"></p> 
                <p id="thirdWord3"></p> 
                <p id="fourthWord3"></p> 
                <p id="fifthWord3"></p> 
            </li>
            <li id="breakWordWithLength">
                <label for="breakWordWithLength">Break Word with Length</label>
                <p id="firstWord4"></p> 
                <p id="secondWord4"></p> 
                <p id="thirdWord4"></p> 
                <p id="fourthWord4"></p> 
                <p id="fifthWord4"></p>  
            </li>
        </ol>

        <script>
            // Soal No. 1 Menggabungkan string
            var word = 'JavaScript';
            var second = 'is';
            var third = 'awesome';
            var fourth = 'and';
            var fifth = 'I';
            var sixth = 'love';
            var seventh = 'it!';

            // Buatlah agar kata-kata di atas menjadi kalimat dalam variabel string dengan nama sentence
            var sentence =  word+' '+second+' '+third+' '+fourth+' '+fifth+' '+sixth+' '+seventh; //Edit variabel ini sehingga outputnya "Javascript is awesome and I love it!"

            // dari sini code jangan diganggu
            document.getElementById("formSentence").innerHTML = sentence
            // sampai sini code jangan diganggu

            // Soal No. 2 Memecah string dengan mengakses karakter berdasarkan indexnya
            var kalimat = 'wow JavaScript is so cool';
            var contohKataPertama = kalimat[0] + kalimat[1] + kalimat[2]; // ini contohnya
            var kataKedua = kalimat[4]+kalimat[5]+kalimat[6]+kalimat[7]+kalimat[8]+kalimat[9]+kalimat[10]+kalimat[11]+kalimat[12]+kalimat[13]; // = Tambahkan sendiri di sini!
            var kataKetiga = kalimat[15]+kalimat[16];// = Tambahkan sendiri di sini!
            var kataKeempat = kalimat[18]+kalimat[19];// = Tambahkan sendiri di sini!
            var kataKelima = kalimat[21]+kalimat[22]+kalimat[23]+kalimat[24];// = Tambahkan sendiri di sini!

            // -- Dari sini code jangan diganggu!
            document.getElementById("firstWord").innerHTML = "First Word: " + contohKataPertama 
            document.getElementById("secondWord").innerHTML = "Second Word: " + kataKedua
            document.getElementById("thirdWord").innerHTML = "Third Word: " + kataKetiga
            document.getElementById("fourthWord").innerHTML = "Fourth Word: " + kataKeempat
            document.getElementById("fifthWord").innerHTML = "Fifth Word: " + kataKelima
            // -- sampai sini code jangan diganggu

            // Soal No. 3  Mengambil sebagian dari string dengan metode substring
            var kalimat3 = 'wow JavaScript is so cool';
            var contohKataPertama3 = kalimat3.substring(0, 3);
            var kataKedua3 = kalimat3.substring(4,14); // = Tambahkan sendiri di sini!
            var kataKetiga3 = kalimat3.substring(15,17);// = Tambahkan sendiri di sini!
            var kataKeempat3 = kalimat3.substring(18,20);// = Tambahkan sendiri di sini!
            var kataKelima3 = kalimat3.substring(21,25);// = Tambahkan sendiri di sini!

            // -- Dari sini jangan diganggu!
            document.getElementById("firstWord3").innerHTML = "First Word : " + contohKataPertama3 
            document.getElementById("secondWord3").innerHTML = "Second Word : " + kataKedua3
            document.getElementById("thirdWord3").innerHTML = "Third Word : " + kataKetiga3
            document.getElementById("fourthWord3").innerHTML = "Fourth Word : " + kataKeempat3
            document.getElementById("fifthWord3").innerHTML = "Fifth Word : " + kataKelima3
            // -- sampai sini jangan diganggu

            // Soal No. 4
            var kalimat4 = 'wow JavaScript is so cool';
            var contohKataPertama4 = kalimat4.substr(0, 3);
            var kataKedua4 = kalimat4.substr(4, 10);// = Tambahkan sendiri di sini!
            var kataKetiga4 = kalimat4.substr(15, 2);// = Tambahkan sendiri di sini!
            var kataKeempat4 = kalimat4.substr(18, 2);// = Tambahkan sendiri di sini!
            var kataKelima4 = kalimat4.substr(21, 4);// = Tambahkan sendiri di sini!

            var panjangKataPertama4 = contohKataPertama4.length; // output nya panjang string "wow" adalah 3
            // Buat variabel baru di sini untuk mendapatkan panjang dari kata selanjutnya : panjangKataKedua4, panjangKataKetiga4, 
            // panjangKataKeempat4, panjangKataKelima4
            var panjangKataKedua4 = kataKedua4.length;
            var panjangKataKetiga4 = kataKetiga4.length;
            var panjangKataKeempat4 = kataKeempat4.length;
            var panjangKataKelima4 = kataKelima4.length;

            document.getElementById("firstWord4").innerHTML = "First Word : " + contohKataPertama4 + ', with length: ' + panjangKataPertama4;
            document.getElementById("secondWord4").innerHTML = "Second Word : " + kataKedua4 + ', with length: '+panjangKataKedua4; // lengkapi sesuai dengan variabel yang kamu buat
            document.getElementById("thirdWord4").innerHTML = "Third Word : " + kataKetiga4 + ', with length: ' +panjangKataKetiga4;// lengkapi sesuai dengan variabel yang kamu buat
            document.getElementById("fourthWord4").innerHTML = "Fourth Word : " + kataKeempat4 + ', with length: '+panjangKataKeempat4; // lengkapi sesuai dengan variabel yang kamu buat
            document.getElementById("fifthWord4").innerHTML = "Fifth Word : " + kataKelima4 + ', with length: ' +panjangKataKelima4;// lengkapi sesuai dengan variabel yang kamu buat
            
            
        </script>
    </body>
</html>