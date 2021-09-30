<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<fieldset><h1 border="1" style="padding: 20px; background-color: #c08457;">
  <center>BERANDA BUKU</center></h1></fieldset>
  <center>
    <fieldset>
    <h1 border="1" style="padding: 100px; background-color: #c08457;">
  <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"><a href="beranda.php">BERANDA</a></li>
            <li><a href="create_pembeli.php">PESAN</a></li>
            <li><a href="proses.php"></a></li>
            <li><a href="index.php"></a></li>
            <li><a href="keluar.php">KELUAR</a></li>

          </ul>
        </div>
      </nav>
        <legend>Data Buku</legend>
        <a href="create_pembeli.php">tambah data buku</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Nama Pembeli</th>
                <th>Harga</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$buku = new Pembeli();
$no = 1;
// var_dump($dosen->index());
foreach ($buku->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_buku']; ?></td>
                    <td><?php echo $data['nama_pembeli']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    <style type="text/css">
    a{text-decoration: none; font-size: 20px;font-family: sans-serif;padding: 14px 10px}
    ul{padding: 14px}
    li{list-style: none; display: inline;}
    li a{background: #ac6730; color:black;}
</style>
</body>

</html>