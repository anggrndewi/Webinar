<div class="container-xxl py-5">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-5"><?= $deskwebinar[0]['judul'] ?></h1>
        <img src="<?= base_url().'assets/img/webinar/'.$deskwebinar[0]['poster']?>" alt="Deskripsi Gambar" width="600px">
    </div>
    <div class="container">
        <h2>Deskripsi</h2>
        <p><?= $deskwebinar[0]['deskwebinar']?></p>
        <h2>Tangal</h2>
        <p><?= $deskwebinar[0]['waktu']?></p>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4">Pemateri</h1>
                <span class="nama-pemateri"><?= $deskwebinar[0]['namapemateri']?></span>
                <p class="mb-4"><?= $deskwebinar[0]['deskpemateri']?></p>
            </div>
            <div class="row mt-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2>Dapatkan Voucher Belajar</h2>
                <p>Informasi tentang voucher belajar</p>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2>Dapatkan Sertifikat</h2>
                <p>Informasi tentang sertifikat</p>
            </div>
        </div>
            
            <?php foreach($deskwebinar as $deskwebinar) { ?>
                <a class="btn btn-primary btn-lg d-block" type="button" href="<?= '/pendaftaran/'.$deskwebinar['id'] ?>">Join Sekarang </a>
                <?php } ?>
            
        </div>
    </div>
</div>

</body>

</html>