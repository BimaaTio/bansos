<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Kelola Formulir</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../">Home</a></li>
          <li class="breadcrumb-item"><a href="?hal=">Dashboard</a></li>
          <li class="breadcrumb-item active">Formulir</li>
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
          title: 'Sip Data Berhasil dihapus!'
        });
      </script>
    <?php endif; ?>
  </div><!-- /.container-fluid -->
</div>
<section class="content">
  <div class="container-fluid">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
          <table id="example1" class="table table-bordered table-striped text-justify">
            <thead>
              <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Telp</th>
                <th>Jenis Bantuan</th>
                <th>Tgl</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($dataForm as $d) : ?>
                <tr>
                  <td><?= $d['nik'] ?></td>
                  <td><?= $d['full_name'] ?></td>
                  <td><?= $d['jk'] ?></td>
                  <td><?= $d['alamat'] ?></td>
                  <td><?= $d['agama'] ?></td>
                  <td><?= $d['telp'] ?></td>
                  <td><?= $d['jb'] ?></td>
                  <td><?= $d['tgl_confirm'] ?></td>
                  <td>
                    <button type="button" class="btn btn-sm btn-info
                  " data-toggle="modal" data-target="#modal-default">
                      Detail
                    </button>
                    <a href="hapus.php?idf=<?= $d['id'] ?>" id="btnHapus" class="btn btn-sm mt-1 btn-danger">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</section>


<!-- Modal -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" class="needs-validation" novalidate>
          <div class="market-status-table mt-4">
            <div class="table-responsive" style="overflow-x:hidden;">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>NIK</label>
                    <input name="nik" readonly type="text" class="form-control" placeholder="NIK" maxlength="16" value="" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input name="fn" type="text" readonly class="form-control" placeholder="Nama Lengkap" maxlength="50" value="" required>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jk" readonly>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label>Alamat Lengkap</label>
                  <input name="alamat" type="text" readonly class="form-control" placeholder="Alamat Lengkap" maxlength="100" value="" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control" readonly name="agama">
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
                  <input name="telp" type="tel" readonly class="form-control" placeholder="No Telepon" maxlength="15" value="" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Jenis Bantuan</label>
                  <input name="jb" type="text" readonly class="form-control" placeholder="Jenis Bantuan" maxlength="10" value="" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Tanggal Konfirmasi</label>
                  <input name="tgl_confirm" readonly type="date" class="form-control" placeholder="Tanggal Konfirmasi" maxlength="10" value="">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>