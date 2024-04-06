<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .card{
            position: relative;
            align-items: center;
            top: 150px;
            display: flex;
            margin: 0 auto;
            border: 1;
        }
    </style>
</head>
<body>
<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header"><h5>Hai, <?php echo session()->get('username_mahasiswa')?></h5> </div>
  <div class="card-body">
    <h5 class="card-title">Login success</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="<?php echo site_url('halaman/logout')?>"><button class="btn bg-primary text-white">Logout</button></a>
  </div>
</div>

</body>
</html>