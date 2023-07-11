    <!-- Booking Start -->
    <div class="container-fluid my-5 px-0">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-light text-center p-5">
                    <h1 class="mb-4">Presensi</h1>
                    <form method="POST" action="/input" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;" name="nama">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;" name="email">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Whatsapp" style="height: 55px;" name="nowa">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Address" style="height: 55px;" name=" alamat">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="file" class="form-control border-0" placeholder="Bukti Kehadiran" style="height: 55px;" name=" bukti">
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
    <!-- Booking End -->
</body>

</html>