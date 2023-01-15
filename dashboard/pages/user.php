<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">User Terdaftar</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="?hal=">Dashboard</a></li>
          <li class="breadcrumb-item active">User</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
  <div class="container-fluid">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
          <table id="user" class="table table-bordered table-striped text-justify">
            <thead>
              <th width="1%">No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>IP</th>
              <th>Tgl Buat</th>
              <th width="2%"></th>
            </thead>
            <tbody>
              <?php $i = 1;
              foreach ($user as $u) : ?>
                <tr>
                  <td><?= $i++ ?></td>
                  <td><?= $u['full_name'] ?></td>
                  <td><?= $u['email'] ?></td>
                  <td><?= $u['ip'] ?></td>
                  <td><?= $u['tgl_dibuat'] ?></td>
                  <td>
                    <a href="hapus.php?uid=<?= $u['uid'] ?>" id="btnHapus" class="btn text-center btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>