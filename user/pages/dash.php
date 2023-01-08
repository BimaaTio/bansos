<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Selamat Datang <u><?= $data['full_name'] ?></u></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
    <?php if (isset($_GET['oke'])) : ?>
      <script>
        var Toast = Swal.mixin({
          toast: true,
          position: 'top',
          showConfirmButton: false,
          timer: 3000
        });
        Toast.fire({
          icon: 'success',
          title: 'Data Berhasil Terkirim'
        });
      </script>
    <?php endif; ?>
  </div><!-- /.container-fluid -->
</div>
<div class="content">
  <div class="container-fluid">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h3>Panduan Input Data : </h3>
          <p>
            1. Isi seluruh formulir yang ditampilkan kemudian periksa kembali, pastikan tidak ada data yang salah.
            <br>
            2. Klik simpan, kemudian klik konfirmasi. Setelah dikonfirmasi, data tidak dapat diubah kembali.
            <br>
            3. Jika sudah, bukti input data akan ditampilkan dan dapat diunduh menjadi PDF.
            <br><br>
            *Note: Pihak admin baru akan menerima data anda setelah anda klik Konfirmasi.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>