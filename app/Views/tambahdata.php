  <!-- Begin Page Content -->
  <div class="container-fluid">
  
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Notifikasi</h1>
  
    <!-- Form -->
    <div class="row">
      <div class="col-lg-12">
        <form method="POST" action="/tambahdata" enctype="multipart/form-data">
          <!-- Webinar Title -->
          <div class="form-group">
            <label for="webinarTitle">Nama</label>
            <input type="text" class="form-control" id="webinarTitle" name="nama" placeholder="Enter webinar title" required>
          </div>
          <!-- Webinar Date -->
          <div class="form-group">
            <label for="webinarDate">Link Webinar</label>
            <input type="text" class="form-control" id="webinarDate" name="linkwebinar" required>
          </div>
           <!-- Deskripsi Webinar -->
          <div class="form-group">
            <label for="deskwebinar">Link Presensi</label>
            <input type="text" class="form-control" id="deskwebinar" name="linkpresensi" required>
          </div>
          <!-- Nama Pemateri -->
          <div class="form-group">
            <label for="pesan">Pesan</label>
            <input type="text" class="form-control" id="namapemateri" name="pesan" required>
          </div>
         
          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary">Add Notifikasi</button>
        </form>
      </div>
    </div>
  
  </div>
  <!-- /.container-fluid -->