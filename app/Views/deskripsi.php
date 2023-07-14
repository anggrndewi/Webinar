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
            <div class="col-lg-6 pt-4" style="min-height: 500px;">
                <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/about-1.jpg" style="object-fit: cover; width: 100px; " alt="">
                </div>
            </div>
            <div class="button-container">
            <?php foreach($deskwebinar as $deskwebinar) { ?>
                <a href="<?= '/pendaftaran/'.$deskwebinar['id'] ?>"><button class="btn btn-primary" onclick="openNewPage()">Join Sekarang</button> </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

</body>

</html>