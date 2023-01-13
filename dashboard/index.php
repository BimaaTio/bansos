<?php
session_start();
require '../config/functions.php';
if (!isset($_SESSION['login'])) {
  header("Location:../login.php?bad=Silahkan Login Dahulu");
  exit;
}
$uid = $_SESSION['uid'];
$data = query("SELECT * FROM tb_adm WHERE uid = $uid ")[0];
$jmlUser = numRows("SELECT * FROM tb_user");
$jmlForm = numRows("SELECT * FROM tb_form");
$dataForm = query("SELECT * FROM tb_form");
$jmlAntri = numRows("SELECT * FROM tb_antrian");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIMSOS &mdash; Dashboard </title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- favicon -->
  <link rel="shortcut icon" href="../assets/img/magelang.png" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/toastr/toastr.min.css">
  <!-- Toastr -->
  <script src="../assets/adminlte/plugins/toastr/toastr.min.js"></script>
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/adminlte/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <script src="../assets/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="../assets/img/magelang.png" alt="AdminLTELogo" height="150" width="150">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="logout.php" role="button">
            Keluar <i class="ml-1 fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../" class="brand-link">
        <img src="../assets/img/magelang.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIMSOS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../assets/adminlte/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= $data['full_name'] ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">MENU</li>
            <li class="nav-item">
              <a href="?hal=" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?hal=antrian" class="nav-link">
                <i class="nav-icon fas fa-microphone"></i>
                <p>Antrian</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?hal=formulir" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Formulir</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?hal=user" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>User Terdaftar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?hal=admin" class="nav-link">
                <i class="nav-icon fas fa-user-secret"></i>
                <p>Kelola Admin</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php
      if (isset($_GET['hal'])) {
        include 'config.php';
      } else {
        echo "<script>document.location.href = '?hal=''';</script>";
      }
      ?>
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="#">SIMSOS MAGELANG</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.1
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->
  <!-- load file audio bell antrian -->
  <audio id="tingtung" src="../assets/audio/tingtung.mp3"></audio>
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="../assets/adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/adminlte/dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- DataTables  & Plugins -->
  <script src="../assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../assets/adminlte/plugins/jszip/jszip.min.js"></script>
  <script src="../assets/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../assets/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- jQuery Mapael -->
  <script src="../assets/adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="../assets/adminlte/plugins/raphael/raphael.min.js"></script>
  <script src="../assets/adminlte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="../assets/adminlte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="../assets/adminlte/plugins/chart.js/Chart.min.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "ordering": true,
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    $(document).on('click', '#btnHapus', function(e) {
      e.preventDefault();
      var href = $(this).attr('href');
      Swal.fire({
        title: 'Yakin Mau Dihapus?',
        text: "Kamu Tidak Dapat Mengambalikan Data yang dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya Hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href = href
          Swal.fire(
            'Terhapus!',
            'Data Berhasil Dihapus',
            'success'
          )
        }
      })
    });
  </script>
<!-- Responsivevoice -->
<!-- Get API Key -> https://responsivevoice.org/ -->
<script src="https://code.responsivevoice.org/responsivevoice.js?key=jQZ2zcdq"></script>

<script type="text/javascript">
  $(document).ready(function () {
    // tampilkan informasi antrian
    $('#jumlah-antrian').load('pages/antrian/get_jumlah_antrian.php');
    $('#antrian-sekarang').load('pages/antrian/get_antrian_sekarang.php');
    $('#antrian-selanjutnya').load('pages/antrian/get_antrian_selanjutnya.php');
    $('#sisa-antrian').load('pages/antrian/get_sisa_antrian.php');

    // menampilkan data antrian menggunakan DataTables
    var table = $('#tabel-antrian').DataTable({
      "lengthChange": false, // non-aktifkan fitur "lengthChange"
      "searching": false, // non-aktifkan fitur "Search"
      "ajax": "pages/antrian/get_antrian.php", // url file proses tampil data dari database
      // menampilkan data
      "columns": [{
          "data": "no_antrian",
          "width": '250px',
          "className": 'text-center'
        },
        {
          "data": "status",
          "visible": false
        },
        {
          "data": null,
          "orderable": false,
          "searchable": false,
          "width": '100px',
          "className": 'text-center',
          "render": function (data, type, row) {
            // jika tidak ada data "status"
            if (data["status"] === "") {
              // sembunyikan button panggil
              var btn = "-";
            }
            // jika data "status = 0"
            else if (data["status"] === "0") {
              // tampilkan button panggil
              var btn =
                "<button class=\"btn btn-success btn-sm rounded-circle\"><i class=\"fas fa-microphone\"></i></button>";
            }
            // jika data "status = 1"
            else if (data["status"] === "1") {
              // tampilkan button ulangi panggilan
              var btn =
                "<button class=\"btn btn-secondary btn-sm rounded-circle\"><i class=\"fas fa-microphone\"></i></button>";
            };
            return btn;
          }
        },
      ],
      "order": [
        [0, "desc"] // urutkan data berdasarkan "no_antrian" secara descending
      ],
      "iDisplayLength": 10, // tampilkan 10 data per halaman
    });

    // panggilan antrian dan update data
    $('#tabel-antrian tbody').on('click', 'button', function () {
      // ambil data dari datatables 
      var data = table.row($(this).parents('tr')).data();
      // buat variabel untuk menampilkan data "id"
      var id = data["id"];
      // buat variabel untuk menampilkan audio bell antrian
      var bell = document.getElementById('tingtung');

      // mainkan suara bell antrian
      bell.pause();
      bell.currentTime = 0;
      bell.play();

      // set delay antara suara bell dengan suara nomor antrian
      durasi_bell = bell.duration * 770;

      // mainkan suara nomor antrian
      setTimeout(function () {
        responsiveVoice.speak("Nomor Antrian, " + data["no_antrian"] + ", menuju, loket, yang tersedia",
          "Indonesian Male", {
            rate: 0.9,
            pitch: 1,
            volume: 1
          });
      }, durasi_bell);

      // proses update data
      $.ajax({
        type: "POST", // mengirim data dengan method POST
        url: "pages/antrian/update.php", // url file proses update data
        data: {
          id: id
        } // tentukan data yang dikirim
      });
    });
    // auto reload data antrian setiap 1 detik untuk menampilkan data secara realtime
    setInterval(function () {
      $('#jumlah-antrian').load('pages/antrian/get_jumlah_antrian.php').fadeIn("slow");
      $('#antrian-sekarang').load('pages/antrian/get_antrian_sekarang.php').fadeIn("slow");
      $('#antrian-selanjutnya').load('pages/antrian/get_antrian_selanjutnya.php').fadeIn("slow");
      $('#sisa-antrian').load('pages/antrian/get_sisa_antrian.php').fadeIn("slow");
      table.ajax.reload(null, false);
    }, 1000);
  });
</script>
</body>

</html>