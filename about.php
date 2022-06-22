<?php
//inisialisasi session
session_start();
 
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<style>
    /* mengatur warna backgroud dan padding pada tag body bagian atas agar form tidak menempel diatas */
body {
    background-image: url('img/BG.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 25px;
    text-align: center;
    color: #364f6b;
}

.keterangan {
    font-size: 20px;
    padding-right: 100px;
    padding-left: 100px;
}

/* mengatur warna backgroud form */
form {
    background: #EEEEEE;
}

/* mengatur border dan padding class form-container */
.tutor-list {
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
}

.kartu-tutor {
    width: 20%;
    margin: 0 auto;
}

.kartu-tutor img {
    width: 80%;
    border-radius: 10%;
}
</style>
<body>
    <h1>About</h1>
    <p class="keterangan">“Swatsh” adalah sebuah website yang dapat membantu para masyarakat yang ingin melakukan kegiatan olahraga, dalam hal pencarian sebuah informasi fasilitas pada lapangan yang ada. Yang dimana menggunakan sistem “user to user” jadi user dapat menginputkan data/informasi yang mereka ketahui, dan user lain juga dapat menerima informasi yang diberikan oleh user lain.<br>Saling membantu adalah hal yang sangat sempurna :)<br><br>! Berbijaklah dalam menggunakan Internet !</p>
<section id="tutors">
            <div class="tengah">
                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="img/agil.png"/>
                        <p>Agil Saim Setiawan</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="img/lutfan.png"/>
                        <p>Lutfan Davi</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="img/naufal.png"/>
                        <p>Naufal Rizq Ramadhan</p>
                    </div>
                </div>
            </div>
</section>
</body>
</html>