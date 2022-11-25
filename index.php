<!doctype html>
<html lang="en">

<head>
  <title>Rekord Mata Kuliah</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container mt-3">
    <h2>Rekord Mata Kuliah</h2>
    <form action=""method="post">
    <div class="mb-3 mt-3">
    <label for="MK" class="form-label">Mata Kuliah:</label>
    <input type="MK" class="form-control" id="MK" placeholder="Enter matakuliah" name="MK">
  </div>
        <button type="submit" class ="btn btn-primary" name="bSimpan">Simpan Rekord</button>
        <a href="daftarmk.php" class="btn btn-success">Lihat Yang Sudah Terdaftar </a>
    </form>
<?php
if (isset($_POST['bSimpan'])){
    $MK=filter_var($_POST['MK'],FILTER_SANITIZE_STRING);
    $kon=mysqli_connect("localhost","root","","siakadumb");
    $kunci="@#12345UMBOke";
    $sql="insert into matakuliah (MK) values (aes_encrypt('".$MK."','".$kunci."'))";
    
   
    $q=mysqli_query($kon,$sql);
    if ($q){
        echo '<div class="alert alert-success"><strong>Success!</strong> Berhasil Simpan !.</div>';
    } else {
        echo '<div class="alert alert-danger"><strong>Gagal Simpan !</strong> Ulang Kembali !. </div>';
    }
}
?>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  
</body>

</html>