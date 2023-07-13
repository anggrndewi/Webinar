<!-- Nav Item - Data Peserta -->
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Peserta</h1>
  <p class="mb-4">Berikut ini adalah daftar peserta yang terdaftar.</p>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Peserta</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>No. WhatsApp</th>
                          <th>Alamat</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $nomor = 0;
                      foreach ($datapeserta as $row):
                      $nomor++; 
                    ?> 
                      <tr>
                          <td><?= $nomor ?></td>
                          <td><?= $row['nama'] ?></td>
                          <td><?= $row['email'] ?></td>
                          <td><?= $row['nowa'] ?></td>
                          <td><?= $row['alamat'] ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  