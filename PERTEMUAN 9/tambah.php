<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Catatan Diary</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <h2>Tambah Catatan Anda</h2><br>
  <form method="POST"></br>
    <label>Tanggal:</label><br>
    <input type="date" name="tanggal" required><br><br>

    <label>Judul:</label><br>
    <input type="text" name="judul" required><br><br>

    <label>Isi:</label><br>
    <textarea name="isi" rows="5" cols="40" required></textarea><br><br>

    <button type="submit" name="simpan">Simpan</button>
  </form>

  <?php
  if (isset($_POST['simpan'])) {
    $tanggal = $_POST['tanggal'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $query = "INSERT INTO diary (tanggal, judul, isi) VALUES ('$tanggal', '$judul', '$isi')";
    if (mysqli_query($conn, $query)) {
      echo "<script>alert('Catatan berhasil disimpan'); window.location='index.php';</script>";
    } else {
      echo "Gagal: " . mysqli_error($conn);
    }
  }
  ?>
</body>
</html>
