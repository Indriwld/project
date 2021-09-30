<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
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
    <?php
include '../database.php';
$buku = new Pembeli();
foreach ($buku->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $nama_buku = $data['nama_buku'];
    $nama_pembeli = $data['nama_pembeli'];
    $harga = $data['harga'];
}
?>
    <fieldset>
        <legend>Edit Data dosen</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama Buku</th>
                    <td><input type="text" name="nama_buku" value="<?php echo $nama_buku; ?>" required></td>
                </tr>
                <tr>
                    <th>Nama dosen</th>
                    <td><input type="text" name="nama_pembeli" value="<?php echo $nama_pembeli; ?>" required></td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td><input type="int" name="harga" value="<?php echo $harga; ?>" required></td>
                </tr>

                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
<style type="text/css">
    a{text-decoration: none; font-size: 20px;font-family: sans-serif;padding: 14px 10px}
    ul{padding: 14px}
    li{list-style: none; display: inline;}
    li a{background: #ac6730; color:black;}
</style>
</html>