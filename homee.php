<?php 
require_once'koneksi.php';
$data = mysqli_query ($koneksi, 'SELECT * FROM mhsw' );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar content -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">data</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>  
          </ul>
    </div>   
  </div>
</nav>
 <!-- content -->
<div class="container">
        <div class="row">
            <div class="col">
                <h1>Tabel Mahasiswa</h1>
            </div>
        </div>
      
        <div class="row">
            <div class="col"> 
                <a href="add_data.php"class="btn btn-primary">tambah data</a>
            </div>
        </div>
    <div class="row">
        <div class="col-md-8">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php  
     $no=1;
    while ($mahasiswa = mysqli_fetch_assoc($data)) : ?>
     
    <tr>
      <th scope="row"><?php echo $no;?></th>
      <td ><?php echo $mahasiswa['nama'];?></td>
      <td><?php echo $mahasiswa['nim'];?></td>
      <td>
      <a href="detail.php" class="btn btn-sm btn-info">detai</a>
      <a href="edit.php" class="btn btn-sm btn-warning">Edit</a>
      <button class="btn btn-sm btn-danger">Hapus</button>
      </td> 
    </tr>
    <?php 
            $no++;
            endwhile ;?>
  </tbody>
</table>
        </div>
    </div>
 </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
