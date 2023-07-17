<div class="container-fluid my-5 px-0">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="bg-light text-center p-5">
                <h1 class="mb-4">Pendaftaran</h1>
                <form method="POST" action="/daftar">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input required type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;" name="nama">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input required type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;" name="email">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input required type="text" class="form-control border-0" placeholder="Your Whatsapp" style="height: 55px;" name="nowa">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input required type="text" class="form-control border-0" placeholder="Your Address" style="height: 55px;" name="alamat">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input required type="hidden" class="form-control border-0"style="height: 55px;" value="<?= $id?>" name="id_webinar">
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
