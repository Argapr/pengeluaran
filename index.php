<?php 
    
include 'functions.php';
$pengeluaran = query("SELECT * FROM pengeluaran_harian")


?>

<!doctype html>
<html lang="en">

<head>
  <title>Pengeluaran Harian | Arga Pratama</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
  <header>
    
    <h1>Pengeluaran Harian Saya</h1>
    <p>saya membuat tabel pengeluaran harian ini bertujuan untuk saya bisa mengetahui berapa pengeluaran harian saya.</p>
    <a href="tambah.php">tambah</a>

  </header>
  <main>

  <div class="table-responsive">
      <table class="table table-striped table-hover table-primary align-middle">
        <thead class="table-light">
          <tr>
            <th>Tanggal</th>
            <th>Bulan</th>
            <th>Jumlah</th>
            <th>Saldo</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($pengeluaran as $row) : ?>
          <tr>
            <td scope="row"><?= $row["tanggal"] ?></td>
            <td><?= $row["bulan"] ?></td>
            <td><?= $row["jumlah_keluar"] ?></td>
            <td><?= $row["saldo"] ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>