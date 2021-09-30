<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>
<body>
<fieldset><h1 border="1" style="padding: 20px; background-color: #c08457;">
  <center>PESAN BUKU</center></h1></fieldset>
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
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>Nama Buku</th>
                    <td><input type="text" name="nama_buku" required></td>
                </tr>
                <tr>
                    <th>Nama Pembeli</th>
                    <td><input type="text" name="nama_pembeli" required></td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td><input type="number" name="harga" required></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
</body>
<style type="text/css">
    a{text-decoration: none; font-size: 20px;font-family: sans-serif;padding: 14px 10px}
    ul{padding: 14px}
    li{list-style: none; display: inline;}
    li a{background: #ac6730; color:black;}
</style>
</html>