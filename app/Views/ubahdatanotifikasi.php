<!-- Begin Page Content -->
<div class="container-fluid">
  
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Ubah Data Notifikasi</h1>

        <!-- Content Row -->
        <div class="row">
          <div class="col-lg-12">

            <!-- Form -->
            <form>
        <form method="POST" action="/ubahdata" enctype="multipart/form-data">
          <!-- Webinar id -->
          <div class="form-group">
            <input type="hidden" class="form-control" name="id" id="webinarTitle" value="<?=$data[0]['id']?>" required>
          </div>
           <!-- Link Webinar -->
           <div class="form-group">
            <label for="linkwebinar">Link Webinar</label>
            <input type="text" class="form-control" id="linkwebinar" value="<?=$data[0]['linkwebinar']?>" name="linkwebinar" placeholder="Enter link webinar" required>
          </div>
          
           <!-- Link Presensi -->
          <div class="form-group">
            <label for="linkpresensi">Link Presensi</label>
            <input type="text" class="form-control" id="linkpresensi" value="<?=$data[0]['linkpresensi']?>" name="linkpresensi" required>
          </div>
          <!-- Nama Pemateri -->
          <div class="form-group">
            <label for="pesan">pesan</label>
            <input type="text" class="form-control" id="pesan" value="<?=$data[0]['pesan']?>" name="pesan" required>
          </div>
          
          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary">Simpan Notifikasi</button>
        </form>
  
      </div>
    </div>
  
  </div>
 
 
