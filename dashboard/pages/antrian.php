          <div class="row">
            <!-- menampilkan informasi jumlah antrian -->
            <div class="col-md-3 mb-4">
              <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-start">
                    <div class="feature-icon-3 me-4">
                      <i class="bi-people text-warning"></i>
                    </div>
                    <div>
                      <p id="jumlah-antrian" class="fs-3 text-warning mb-1"></p>
                      <p class="mb-0">Jumlah Antrian</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- menampilkan informasi nomor antrian yang sedang dipanggil -->
            <div class="col-md-3 mb-4">
              <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-start">
                    <div class="feature-icon-3 me-4">
                      <i class="bi-person-check text-success"></i>
                    </div>
                    <div>
                      <p id="antrian-sekarang" class="fs-3 text-success mb-1"></p>
                      <p class="mb-0">Antrian Sekarang</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- menampilkan informasi nomor antrian yang akan dipanggil selanjutnya -->
            <div class="col-md-3 mb-4">
              <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-start">
                    <div class="feature-icon-3 me-4">
                      <i class="bi-person-plus text-info"></i>
                    </div>
                    <div>
                      <p id="antrian-selanjutnya" class="fs-3 text-info mb-1"></p>
                      <p class="mb-0">Antrian Selanjutnya</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- menampilkan informasi jumlah antrian yang belum dipanggil -->
            <div class="col-md-3 mb-4">
              <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-start">
                    <div class="feature-icon-3 me-4">
                      <i class="bi-person text-danger"></i>
                    </div>
                    <div>
                      <p id="sisa-antrian" class="fs-3 text-danger mb-1"></p>
                      <p class="mb-0">Sisa Antrian</p>
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