<?php
$session = session();
?>
  <!-- Begin Page Content -->
  <div class="container-fluid">
  
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Webinar</h1>
  
    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-12">
  
        <!-- Form -->
        <form method="POST" action="/tambahdatawebinar" enctype="multipart/form-data">
          <div class="form-group">
            <label for="webinarTitle">Judul</label>
            <input type="text" class="form-control" id="webinarTitle" name="judul" placeholder="Enter webinar title" required>
          </div>
          <!-- Webinar Date -->
          <div class="form-group">
            <label for="webinarDate">Date</label>
            <input type="date" class="form-control" id="webinarDate"  name="waktu" required>
          </div>
           <!-- Deskripsi Webinar -->
          <div class="form-group">
            <label for="deskwebinar">Deskripsi webinar</label>
            <textarea class="form-control" id="deskwebinar"  name="deskwebinar" required></textarea>
          </div>
          <!-- Nama Pemateri -->
          <div class="form-group">
            <label for="namapemateri">Nama Pemateri</label>
            <input type="text" class="form-control" id="namapemateri"  name="namapemateri" required>
          </div>
          <!-- Foto Pemateri -->
          <div class="form-group">
            <label for="deskpemateri">Foto Pemateri</label>
            <input type="file" class="form-control" id="foto_pemateri"  name="foto_pemateri" required>
          </div>
          <!-- Deskripsi Pemateri -->
          <div class="form-group">
            <label for="deskpemateri">Deskripsi Pemateri</label>
            <input type="text" class="form-control" id="deskpemateri"  name="deskpemateri" required>
          </div>
           <!-- Poster -->
           <div class="form-group">
            <label for="deskpemateri">Poster Webinar</label>
            <input type="file" class="form-control" id="poster"  name="poster" required>
          </div>
           <!-- Sertifikat -->
           <div class="form-group">
            <label for="deskpemateri">Sertifikat</label>
            <input type="file" class="form-control" id="sertifikat"  name="sertifikat" required>
          </div>
          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  
      </div>
    </div>
  
  </div>
  <!-- /.container-fluid -->
  