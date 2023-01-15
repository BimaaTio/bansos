<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Pengisian Formulir</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="?hl=">Dashboard</a></li>
          <li class="breadcrumb-item active">Formulir</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
    <?php if (isset($_GET['ops'])) : ?>
      <script>
        var Toast = Swal.mixin({
          toast: true,
          position: 'center',
          showConfirmButton: false,
          timer: 3000
        });
        Toast.fire({
          icon: 'error',
          title: 'Data Gagal terkirim!'
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
          <strong>
            Selamat datang di SIMSOS Desa Pucungrejo.
          </strong>
          <br><br>
          <p>
            Panduan Input Data:
            <br><br>
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

    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="d-sm-flex justify-content-between align-items-center">
            <h2>DATA DIRI</h2>
            <p>* Data yang telah diinput tidak dapat diubah kembali, harap isi dengan teliti dan benar</p>
          </div>
          <form method="post" class="needs-validation" novalidate>
            <div class="market-status-table mt-4">
              <div class="table-responsive" style="overflow-x:hidden;">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label>NIK</label>
                      <input name="nik" type="text" class="form-control" placeholder="NIK" maxlength="16" value="" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input name="fn" type="text" class="form-control" placeholder="Nama Lengkap" maxlength="50" value="" required>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jk">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label>Alamat Lengkap</label>
                    <input name="alamat" type="text" class="form-control" placeholder="Alamat Lengkap" maxlength="100" value="" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Agama</label>
                    <select class="form-control" name="agama">
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Katholik">Katholik</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Konghucu">Konghucu</option>
                    </select>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>No Telepon</label>
                    <input name="telp" type="tel" class="form-control" placeholder="No Telepon" maxlength="15" value="" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Jenis Bantuan</label>
                    <input name="jb" type="text" class="form-control" placeholder="Jenis Bantuan" maxlength="10" value="" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Tanggal Konfirmasi</label>
                    <input name="tgl_confirm" type="date" class="form-control" placeholder="Tanggal Konfirmasi" maxlength="10" value="">
                  </div>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <button type="reset" class="btn btn-danger mr-2">Reset</button>
                  <button type="submit" name="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Proses -->
<?php
if (isset($_POST['submit'])) {
  if (pengajuan($_POST) > 0) {
    echo "<script>
            document.location.href = '?hal=&oke=berhasil!';
          </script>";
  } else {
    echo "<script>
            document.location.href = '?hal=formulir&ops=gagal';
          </script>";
  }
}

?>