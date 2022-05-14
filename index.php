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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
<style>
        #map {
            height: 100%;
        }
 
        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 95%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
    <div class="container">
        <a href="index.php" class="navbar-brand">HOME</a>
        <button class="navbar-toggler" type="button" data-togle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto pt-2 pb-2">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-light">Home</a>
            </li>
            <li class="nav-item ml-4">
                <a href="logout.php" class="nav-link text-light"> Log Out </a>
            </li>
        </ul>
    </div>
</nav>
 
</body>
 <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<body>
      <div id="map"></div>
 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHt2bm2AdygZpm6AcXHG4nQ1zcjy1jink&callback=GMPStart" async defer></script>
<script type="text/javascript">   
    
    let map;
    let infoWindow;
    let mapOptions;
    let bounds;
 
    function GMPStart(){
        // infoWindow ini digunakan untuk menampilkan pop-up diatas marker terkait lokasi markernya
        infoWindow = new google.maps.InfoWindow;
        //  Variabel berisi properti tipe peta yang bisa diubah-ubah
        mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        // Deklarasi untuk melakukan load map Google Maps API
        map = new google.maps.Map(document.getElementById('map'), mapOptions);      
        // Variabel untuk menyimpan batas kordinat
        bounds = new google.maps.LatLngBounds();
        // Pengambilan data dari database MySQL
        <?php
            // Sesuaikan dengan database yang sudah Anda buat diawal
            $host     = "localhost";
            $username = "root";
            $password = "";
            $Dbname   = "swatsh";
            $db       = new mysqli($host,$username,$password,$Dbname);
            
            $query = $db->query("SELECT * FROM maps ORDER BY nama ASC");
            while ($row = $query->fetch_assoc()) {
                $nama = $row["nama"];
                $lat  = $row["latitude"];
                $long = $row["longitude"];
                echo "addMarker($lat, $long, '$nama');\n";
            }
        ?>
        // Proses membuat marker 
        var location;
        var marker;
        function addMarker(lat, lng, info){
            location = new google.maps.LatLng(lat, lng);
            bounds.extend(location);
            marker = new google.maps.Marker({
                map: map,
                position: location
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
        // Proses ini dapat menampilkan informasi lokasi Kota/Kab ketika diklik dari masing-masing markernya
        function bindInfoWindow(marker, map, infoWindow, html){
            google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
    }
</script>
</body>
</html>