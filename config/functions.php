<?php
date_default_timezone_set("Asia/Jakarta");
// koneksi
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'db_simsos');

$conn = mysqli_connect(HOST, USER, PASS, DBNAME);

// query
function query($query)
{
  global $conn;

  $result = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)
  ) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($query)
{
  global $conn;
  mysqli_query($conn, $query);
  if (mysqli_affected_rows($conn) > 0) {
    return true;
  } else {
    return false;
  }
}

function edit($query)
{
  global $conn;
  mysqli_query($conn, $query);
  if (mysqli_affected_rows($conn) > 0) {
    return true;
  } else {
    return false;
  }
}

function hapus($query)
{
  global $conn;
  $hapus = mysqli_query($conn, $query);
  return $hapus;
}

// hitung jumlah data di database
function numRows($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $total = mysqli_num_rows($result);
  return $total;
}

// Rand Number (id)
function randNumb($lenght = 10)
{
  $num = '1234567890';
  $lenght = strlen($num);
  $random = '';
  for ($i = 1; $i < $lenght; $i++) {
    $random .= $num[rand(0, $lenght - 1)];
  }
  return $random;
}

// register 
function regis($data)
{
  global $conn;

  $uid   = substr(randNumb(), 3);
  $fn    = ucwords(htmlspecialchars(stripslashes($_POST['fn'])));
  $email = htmlspecialchars(stripslashes($data['email']));
  $pass  = mysqli_real_escape_string($conn, $data['pass']);
  $pass2 = mysqli_real_escape_string($conn, $data['pass2']);
  $ip    = $_SERVER['REMOTE_ADDR'];
  $tgl   = date("d-m-Y H:i:s");

  $cekEmail = query("SELECT * FROM tb_adm WHERE email = '$email' ");
  if ($cekEmail) {
    echo "
          <script>
          alert('Email Sudah ada!, Silahkan Gunakan Email lain')
          </script>";
    return false;
  }
  if ($pass != $pass2) {
    echo "<script>
              alert('Konfirmasi Password tidak sesuai')
            </script>";
    return false;
  }
  $password = password_hash($pass, PASSWORD_BCRYPT);
  mysqli_query($conn, "INSERT INTO tb_adm VALUES ($uid, '$fn', '$email', '$password', '$ip', '$tgl')");
  return mysqli_affected_rows($conn);
}

// register user
function regUser($data)
{
  global $conn;

  $uid   = substr(randNumb(), 3);
  $fn    = ucwords(htmlspecialchars(stripslashes($_POST['fn'])));
  $email = htmlspecialchars(stripslashes($data['email']));
  $pass  = mysqli_real_escape_string($conn, $data['pass']);
  $pass2 = mysqli_real_escape_string($conn, $data['pass2']);
  $ip    = $_SERVER['REMOTE_ADDR'];
  $tgl   = date("d-m-Y H:i:s");

  $cekEmail = query("SELECT * FROM tb_user WHERE email = '$email' ");
  if ($cekEmail) {
    echo "
          <script>
          alert('Email Sudah ada!, Silahkan Gunakan Email lain')
          </script>";
    return false;
  }
  if ($pass != $pass2) {
    echo "<script>
              alert('Konfirmasi Password tidak sesuai')
            </script>";
    return false;
  }
  $password = password_hash($pass, PASSWORD_BCRYPT);
  mysqli_query($conn, "INSERT INTO tb_user VALUES ($uid, '$fn', '$email', '$password', '$ip', '$tgl')");
  return mysqli_affected_rows($conn);
}

// Edit Format PHONE +62
function formatNomor($nomorhp)
{
  //Terlebih dahulu kita trim dl
  $nomorhp = trim($nomorhp);
  //bersihkan dari karakter yang tidak perlu
  $nomorhp = strip_tags($nomorhp);
  // Berishkan dari spasi
  $nomorhp = str_replace(" ", "", $nomorhp);
  // bersihkan dari bentuk seperti  (022) 66677788
  $nomorhp = str_replace("(", "", $nomorhp);
  // bersihkan dari format yang ada titik seperti 0811.222.333.4
  $nomorhp = str_replace(".", "", $nomorhp);

  //cek apakah mengandung karakter + dan 0-9
  if (!preg_match('/[^+0-9]/', trim($nomorhp))) {
    // cek apakah no hp karakter 1-3 adalah +62
    if (substr(trim($nomorhp), 0, 3) == '+62') {
      $nomorhp = trim($nomorhp);
    }
    // cek apakah no hp karakter 1 adalah 0
    elseif (substr($nomorhp, 0, 1) == '0') {
      $nomorhp = '+62' . substr($nomorhp, 1);
    }
  }
  return $nomorhp;
}

// tambah form pengajuan 
function pengajuan($data)
{
  global $conn;
  
  $id     = substr(randNumb(), 3);
  $nik    = htmlspecialchars($data['nik']);
  $fn     = ucwords(htmlspecialchars(stripslashes($data['fn'])));
  $jk     = htmlspecialchars($data['jk']);
  $alamat = ucwords(htmlspecialchars(stripslashes($data['alamat'])));
  $agama  = htmlspecialchars($data['agama']);
  $telp   = '+62'.htmlspecialchars(formatNomor($data['telp']));
  $jb     = htmlspecialchars(stripslashes($data['jb']));
  $tgl    = htmlspecialchars($data['tgl_confirm']);
  $query  = "INSERT INTO tb_form 
              VALUES
            ($id,$nik,'$fn','$jk','$alamat','$agama',$telp,'$jb','$tgl')
            ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

// Upload gambar
function upGambar()
{

  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];
  //Cek gambar 

  if ($error === 4) {
    echo "<script>
                alert('Pilih gambar terlebih dahulu')
              </script>";
    return false;
  }

  // file type
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $formatFile = explode('.', $namaFile);
  $formatFile = strtolower(end($formatFile));

  if (!in_array($formatFile, $ekstensiGambarValid)) {
    echo "<script>
                alert('Format File tidak sesuai')
              </script>";
    return false;
  }

  // cek size

  if ($ukuranFile > 3000000) {
    echo "<script>
                alert('File size Max 3MB')
              </script>";
    return false;
  }


  // lolos cek
  // generate nama gambar

  $namaBaru = uniqid();
  $namaBaru .= '.';
  $namaBaru .= $formatFile;

  move_uploaded_file($tmpName, '../assets/img/' . $namaBaru);

  return $namaBaru;
}
