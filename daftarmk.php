<!doctype html>
<html lang="en">

<head>
  <title>Tabel Mata Kuliah</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
 <div class="container mt-3">
    <h2>Tabel Mata Kuliah</h2>
    <p>Berikut ini daftar mata kuliah yang terdaftar :</p>
 <table class="table table-border">
    <thead>
        <tr>
            <th>Mata Kuliah</th>
        </tr>
    </thead>
    <tbody>
        <?php $kon=mysqli_connect("localhost","root","","siakadumb");
    $kunci="@#12345UMBOke";
    $sql="select aes_decrypt(MK,'".$kunci."') as MK from matakuliah";
    $q=mysqli_query($kon,$sql);
    $r=mysqli_fetch_array($q);
    do {
        ?>
        <tr>
        <td><?php @$nomor++;echo $nomor;?></td>
            <td><?php echo $r['MK'];?></td>
        </tr>
        <?php
    } while($r=mysqli_fetch_array($q)); ?>
    </tbody>
 </table>
</div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>