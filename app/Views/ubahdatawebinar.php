<?php
$session = session();
?>
  <!-- Begin Page Content -->
  <div class="container-fluid">
  
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ubah Data Webinar</h1>
  
    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-12">
  
        <!-- Form -->
        <form method="POST" action="/ubahdatawebinar" enctype="multipart/form-data">
          <!-- Webinar id -->
          <div class="form-group">
            <input type="hidden" class="form-control" name="id" id="webinarTitle" value="<?=$data[0]['id']?>" required>
          </div>
           <!-- Webinar Title -->
           <div class="form-group">
            <label for="webinarTitle">Judul</label>
            <input type="text" class="form-control" id="webinarTitle" value="<?=$data[0]['judul']?>" name="judul" placeholder="Enter webinar title" required>
          </div>
          <!-- Webinar Date -->
          <div class="form-group">
            <label for="webinarDate">Date</label>
            <input type="date" class="form-control" id="webinarDate" value="<?=$data[0]['waktu']?>" name="waktu" required>
          </div>
           <!-- Deskripsi Webinar -->
          <div class="form-group">
            <label for="deskwebinar">Deskripsi webinar</label>
            <input type="text" class="form-control" id="deskwebinar" value="<?=$data[0]['deskwebinar']?>" name="deskwebinar" required>
          </div>
          <!-- Nama Pemateri -->
          <div class="form-group">
            <label for="namapemateri">Nama Pemateri</label>
            <input type="text" class="form-control" id="namapemateri" value="<?=$data[0]['namapemateri']?>" name="namapemateri" required>
          </div>
          <!-- Deskripsi Pemateri -->
          <div class="form-group">
            <label for="deskpemateri">Deskripsi Pemateri</label>
            <input type="text" class="form-control" id="deskpemateri" value="<?=$data[0]['deskpemateri']?>" name="deskpemateri" required>
          </div>
          
          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
  
      </div>
    </div>
  
  </div>
  <!-- /.container-fluid -->
  