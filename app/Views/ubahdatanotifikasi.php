<?php
$session = session();
?>
<!-- Begin Page Content -->
<div class="container-fluid">
  
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Ubah Data Notifikasi</h1>

       

        <form method="POST" action="/ubahdatanotifikasi" enctype="multipart/form-data">
             <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
            <div class="form-group">
            <label for="browser" class="form-label">Pilih Webinar</label>
            <select class="form-control" aria-label="Default select example" name="id_webinar">
                <option selected>Pilih Webinar</option>
                <?php 
                    $db = db_connect();
                    $query =$db->query('SELECT * FROM webinar')->getResult();
                    foreach ($query as $ubahdata){
                ?>
                <option value="<?=$data[0]['id']?>"><?= $ubahdata->judul ?></option>
                <?php }?>
            </select>
          </div>
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
          <!-- Pesan Email -->
          <div class="form-group">
            <label for="pesan">Pesan Email</label>
            <input type="text" class="form-control" id="pesan" value="<?=$data[0]['pesan']?>" name="pesan" required>
          </div>
          <!-- Pesan Whatsapp -->
          <div class="form-group">
            <label for="pesan">Pesan Whatsapp</label>
            <input type="text" class="form-control" id="pesan" value="<?=$data[0]['pesanwa']?>" name="pesan" required>
          </div>
          
          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary">Simpan Notifikasi</button>
        </form>
  
      </div>
    </div>
  
  </div>
 
 
