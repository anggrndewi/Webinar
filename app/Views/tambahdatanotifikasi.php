  <!-- Begin Page Content -->
  <div class="container-fluid">
  
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah data notifikasi</h1>
  
    <!-- Form -->
    <div class="row">
      <div class="col-lg-12">
        <form method="POST" action="/tambahdatanotifikasi" enctype="multipart/form-data">
          <!-- Pilih Webinar  -->
          <div class="form-group">
          <label for="browser" class="form-label">Pilih Webinar</label>
          <select class="form-control" aria-label="Default select example" name="id_webinar">
            <option selected>Pilih Webinar</option>
            <?php 
                $db = db_connect();
                $query =$db->query('SELECT * FROM webinar')->getResult();
                foreach ($query as $tampildata){
              ?>
            <option value="<?= $tampildata->id ?>"><?= $tampildata->judul ?></option>
            <?php }?>
          </select>
          </div>
          
          <!-- Link Webinar  -->
          <div class="form-group">
            <label for="link webinar">Link Webinar</label>
            <input type="text" class="form-control" id="linkwebinar" name="linkwebinar" required>
          </div>
           <!-- Link Presensi -->
          <div class="form-group">
            <label for="deskwebinar">Link Presensi</label>
            <input type="text" class="form-control" id="linkpresensi" name="linkpresensi" required>
          </div>
          <!-- Pesan -->
          <div class="form-group">
            <label for="pesan">Pesan</label>
            <input type="text" class="form-control" id="pesan" name="pesan" required>
          </div>
         
          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary">Add Notifikasi</button>
        </form>
      </div>
    </div>
  
  </div>
  <!-- /.container-fluid -->