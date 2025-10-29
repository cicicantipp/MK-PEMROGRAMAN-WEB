<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>📔 Diary Harian cici</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="container">
    <h1>📔 Diary Harian Cici</h1>
    <div class="content">
      <a href="tambah.php" class="add-btn">+ Tambah Catatan</a>

      <table>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Judul</th>
          <th>Isi</th>
          <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM diary ORDER BY tanggal DESC");
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>$no</td>
                  <td>{$row['tanggal']}</td>
                  <td>{$row['judul']}</td>
                  <td>{$row['isi']}</td>
                  <td>
                    <a href='edit.php?id={$row['id']}' class='action-btn edit-btn'>Edit</a>
                    <a href='hapus.php?id={$row['id']}' class='action-btn delete-btn' onclick='return confirm(\"Yakin hapus catatan?\")'>Hapus</a>
                  </td>
                </tr>";
          $no++;
        }
        ?>
      </table>
    </div>
  </div>
</body>
