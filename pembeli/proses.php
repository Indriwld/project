<?php
include '../database.php';
$buku = new Pembeli();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = $_POST['id'];
    $nama_buku = $_POST['nama_buku'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $harga = $_POST['harga'];


    if ($aksi == "create") {
        $buku->create($nama_buku, $nama_pembeli, $harga);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $buku->update($id, $nama_buku, $nama_pembeli, $harga);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $buku->delete($id);
        header("location:index.php");
    }

}