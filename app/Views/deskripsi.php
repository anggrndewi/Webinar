<div class="container-xxl py-5">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-5"><?= $deskwebinar[0]['judul'] ?></h1>
        <img src="<?= base_url().'assets/img/webinar/'.$deskwebinar[0]['poster']?>" alt="Deskripsi Gambar" class="img-fluid">
    </div>
    
    <div class="container">
    <h2 style="font-size: 22px;">Deskripsi</h2>
    <p><?= $deskwebinar[0]['deskwebinar']?></p>
    <h2 style="font-size: 22px;">Waktu</h2>
    <p><?= $deskwebinar[0]['waktu']?></p>
    <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <!-- Isi konten lainnya -->
        </div>
        <!-- Konten lainnya -->
    </div>
</div>
<div class="container">
    <h2 class="mb-4" style="font-size: 18px;">Pemateri</h2>
    <img src="<?= base_url().'assets/img/webinar/'.$deskwebinar[0]['foto_pemateri']?>" alt="Gambar Pemateri" style="max-width: 200px;">
    <p class="nama-pemateri" style="font-weight: bold;"><?= $deskwebinar[0]['namapemateri']?></p>
    <p class="mb-4"><?= $deskwebinar[0]['deskpemateri']?></p>
</div>

<div class="container">
<div class="row mt-5">
    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <h2 style="font-size: 18px;">Dapatkan Voucher Belajar</h2>
        <p>Informasi tentang voucher belajar</p>
    </div>
    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <h2 style="font-size: 18px;">Dapatkan Sertifikat</h2>
        <p>Informasi tentang sertifikat</p>
    </div>
</div>

   <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 wow fadeInUp text-center">
            <div class="d-flex flex-column align-items-center">
                <?php foreach ($deskwebinar as $data) { ?>
                    <a class="btn btn-primary btn-lg my-2" href="<?= '/pendaftaran/' . $data['id'] ?>">Join Sekarang</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

</div>
        </div>
    </div>
</div>

</body>

</html>