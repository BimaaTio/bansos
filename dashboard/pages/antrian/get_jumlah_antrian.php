<?php
// pengecekan ajax request untuk mencegah direct access file, agar file tidak bisa diakses secara langsung dari browser
// jika ada ajax request
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
  // panggil file "database.php" untuk koneksi ke database
  require_once "../../../config/functions.php";

  // ambil tanggal sekarang
  $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

  // sql statement untuk menampilkan jumlah data dari tabel "tbl_antrian" berdasarkan "tanggal"
  $query = mysqli_query($conn, "SELECT count(id) as jumlah FROM tb_antrian 
                                  WHERE tgl='$tanggal'")
                                  or die('Ada kesalahan pada query tampil data : ' . mysqli_error($conn));
  // ambil data hasil query
  $data = mysqli_fetch_assoc($query);
  // buat variabel untuk menampilkan data
  $jumlah_antrian = $data['jumlah'];

  // tampilkan data
  echo number_format($jumlah_antrian, 0, '', '.');
}
