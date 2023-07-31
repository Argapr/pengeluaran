<?php 

$conn = mysqli_connect("localhost", "root", "", "project_1");

if( isset($_POST["submit"])) {
    $tanggal   = $_POST["tanggal"];
    $bulan     = $_POST["bulan"];
    $jumlah    = $_POST["jumlah"];
    $saldo      = $_POST["saldo"];
    $query = "INSERT INTO pengeluaran_harian VALUES ('$tanggal', '$bulan', '$jumlah', '$saldo')";
    mysqli_query($conn, $query);
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Halaman Tambah | Arga Pratama</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <h1>Tambah Pengeluaran</h1>
  </header>
  <main>
  <form action="" method="post">
        <ul>
            <li>
                <label for="tanggal">Tangal :</label>
                <input type="text" name="tanggal" id="tanggal">
            </li>
            <li>
                <label for="bulan">Bulan :</label>
                <input type="text" name="bulan" id="bulan">
            </li>
            <li>
                <label for="jumlah">Jumlah :</label>
                <input type="text" name="jumlah" id="jumlah">
            </li>
            <li>
                <label for="saldo">Saldo :</label>
                <input type="text" name="saldo" id="saldo">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>

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