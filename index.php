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
<!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>
        #map {
            height: 100%;
        }
        body {
            height: 95%;
            margin: 0;
            padding: 0;
            font-family: 'comic sans ms';
        }
        .mapbox{
            margin: 0;
        }
        #map {
            height: 90vh;
            width: 100vw;
        }
    </style>

<script src='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.css' rel='stylesheet' />

</head>
<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
    <div class="container">
        <a href="index.php" class="navbar-brand">Swatsh</a>
        <button class="navbar-toggler" type="button" data-togle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto pt-2 pb-2">
            <li class="nav-item">
                <a href="addplace.php" class="nav-link text-light">Add Place</a>
            </li>
            <li class="nav-item ml-5">
                <a href="about.php" class="nav-link text-light">About</a>
            </li>
            <li class="nav-item ml-5">
                <a href="logout.php" class="nav-link text-light">Log Out</a>
            </li>
        </ul>
    </div>
</nav>
</body>
<body>
    <script class="mapbox" src="script.js" defer></script>
<body>
    <div id='map'></div>
</body>
</body>
</html>