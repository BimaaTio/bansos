<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Panggil Antrian</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../">Home</a></li>
          <li class="breadcrumb-item"><a href="?hal=">Dashboard</a></li>
          <li class="breadcrumb-item active">Antrian</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
</div>
<section class="content">
  <div class="container-fluid">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
          <div class="row">
            <!-- menampilkan informasi jumlah antrian -->
            <div class="col-md-3 mb-4">
              <div class="card info-box border-0 shadow-sm">
                <div class="card-body p-4">
                  <div class="d-flex  justify-content-start">
                    <div class="feature-icon-3 me-4">
                      <i class="fas fa-users text-warning"></i>
                    </div>
                    <div>
                      <h5 id="jumlah-antrian" class=" text-warning info-box-number mb-1"></h5>
                      <p class="mb-0 ml-2 info-box-text">Jumlah Antrian</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- menampilkan informasi nomor antrian yang sedang dipanggil -->
            <div class="col-md-3 mb-4">
              <div class="card info-box border-0 shadow-sm">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-start">
                    <div class="feature-icon-3 me-4">
                      <i class="fas fa-user text-success"></i>
                    </div>
                    <div>
                      <h5 id="antrian-sekarang" class="fs-3 text-success info-box-number mb-1"></h5>
                      <p class="mb-0 ml-2 info-box-text">Antrian Sekarang</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- menampilkan informasi nomor antrian yang akan dipanggil selanjutnya -->
            <div class="col-md-3 mb-4">
              <div class="card info-box border-0 shadow-sm">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-start">
                    <div class="feature-icon-3 me-4">
                      <i class="fas fa-user-plus text-info"></i>
                    </div>
                    <div>
                      <h5 id="antrian-selanjutnya" class="fs-3 text-info info-box-number mb-1"></h5>
                      <p class="mb-0 ml-2 info-box-text">Antrian Selanjutnya</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- menampilkan informasi jumlah antrian yang belum dipanggil -->
            <div class="col-md-3 mb-4">
              <div class="card info-box border-0 shadow-sm">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-start">
                    <div class="feature-icon-3 me-4">
                      <i class="fas fa-user text-danger"></i>
                    </div>
                    <div>
                      <h5 id="sisa-antrian" class="h text-danger info-box-number mb-1"></h5>
                      <p class="mb-0 ml-2 info-box-text">Sisa Antrian</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <div class="table-responsive">
                <table id="tabel-antrian" class="table table-bordered table-striped table-hover" width="100%">
                  <thead>
                    <tr>
                      <th>Nomor Antrian</th>
                      <th>Status</th>
                      <th>Panggil</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>