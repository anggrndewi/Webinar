        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Data Webinar</h1>
          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Nama Pemateri</th>
                    <th scope="col">Deskripsi Pemateri</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $nomor = 0;
                  foreach($tampildata as $row):
                      $nomor++;
                ?>
                  <tr>
                  <th><?= $nomor; ?></th>
                  <td><?=$row->judul ?></td>
                  <td><?=$row->waktu ?></td>
                  <td><?=$row->deskwebinar ?></td>
                  <td><?=$row->namapemateri ?></td>
                  <td><?=$row->deskpemateri ?></td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->