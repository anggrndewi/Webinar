        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <?php
              if (session()->getFlashdata('message')) {
                  echo "<div class='alert alert-warning'><marquee>".session()->getFlashdata('message')."</marquee></div>";
              }
          ?>
          <h1 class="h3 mb-4 text-gray-800">Ubah Data Notifikasi</h1>

          <!-- Content Row -->
          <div class="row">

            <div class="col-lg-12">

              <!-- Form Group -->
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Notifikasi">
              </div>

              <!-- Form Group -->
              <div class="form-group">
                <label for="isi">Isi</label>
                <textarea class="form-control" id="isi" rows="5" placeholder="Masukkan Isi Notifikasi"></textarea>
              </div>

              <!-- Button -->
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-secondary">Batal</button>

            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
