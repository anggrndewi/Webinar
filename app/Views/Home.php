<div class="container-xxl py-5">
    <div class="container">
    <h1 class="text-center wow fadeInUp">Webinar Lampung Cerdas</h1>
        <div class="row g-4">
        <?php foreach($deskwebinar as $deskwebinar) { ?>
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/webinar 3.jpg" alt="">
                </div>
                  <a class="btn btn-primary btn-lg d-block" type="button" href="<?= '/detail/'.$deskwebinar->id ?>">Read more <i class="fa fa-arrow-right"></i></a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

</body>
</html>


