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
    <title>Add Place</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.js'></script>
<script src='https://api.mapbox.com/geocoding/v5/mapbox.places/-73.98055787507087,40.733592611588904.json?types=place%2Cpostcode%2Caddress&limit=1&access_token=pk.eyJ1IjoiemNocyIsImEiOiJjbDM4ZnNieDQwMGt4M2RscjIyN2ppcncyIn0.3gXvKAUHjNQscl10hGZkfQ'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.css' rel='stylesheet' />

<style>
    body {
    background-image: url('img/BG.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 15px;
    color: #364f6b;
    height: 95%;
    margin: 0;
    padding: 10px;
}
</style>

</head>
<body>
<script class="mapbox" src="script.js" defer></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">MapBox</div>
                <div class="card-body">
                    <div wire:ignore id='map' style='width: 100%; height: 75vh;'></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white">Add Place</div>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Longtitude</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Place Name</label>
                            <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Facility</label>
                            <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Picture</label>
                        <div class="custom-file">
                            <input wire:model=""image type="file" class="custom-file-input">
                            <label class="custom-file-label" for="customerFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark text-white btn-block">Add Place</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>