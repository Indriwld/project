<?php
class Pembeli extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $buku = mysqli_query($this->koneksi, "select * from pembeli");
        // var_dump($datadosen);
        return $buku;
    }

    // Menambah Data
    public function create($nama_buku, $nama_pembeli, $harga)
    {
        mysqli_query(
            $this->koneksi,
            "insert into pembeli values(null,'$nama_buku','$nama_pembeli', '$harga')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $buku = mysqli_query(
            $this->koneksi,
            "select * from pembeli where id='$id'"
        );
        return $buku;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $buku = mysqli_query(
            $this->koneksi,
            "select * from pembeli where id='$id'"
        );
        return $buku;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama_buku, $nama_pembeli, $harga)
    {
        mysqli_query(
            $this->koneksi,
            "update pembeli set harga = '$harga' nama_pembeli = '$nama_pembeli' nama_buku='$nama_buku' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from pembeli where id='$id'");
    }
}