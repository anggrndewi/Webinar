
    <div class="container-fluid my-5 px-0">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">
                            <?= $judul ?>
                        </h3>
                    </div>  
                    <div class="card-body">
                        <p class="text-center"><?= $deskripsi ?> </p>
                    </div>
                    <button class="btn btn-primary w-100 py-3" onclick="generatePDF()">Download Sertifikat</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Lampung Cerdas</h4>
                    <p> Lampung Cerdas adalah Perusahaan yang bergerak dibidang edukasi
                        dan training khusus pada pelajar, mahasiswa dan millenial.
                        perusahaan kami bergerak dalam hal training, E-course, dan
                        Pendampingan pada millenial.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Program</h4>
                    <a class="btn btn-link" href="">Kuliah Tanpa Tes</a>
                    <a class="btn btn-link" href="">Sekolah Public Speaking</a>
                    <a class="btn btn-link" href="">Life Mentoring</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Lampung Cerdas</h4>
                    <a class="btn btn-link" href="\home">Home</a>
                    <a class="btn btn-link" href="">Pendaftaran</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Soekarno Hatta, Gg. Sawah Baru, Kp. Baru, Kec. Kedaton, Kota Bandar Lampung, Lampung 35141</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>it@lampungcerdas.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/cerdaslampung"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/pt-lampung-cerdas-mendunia"><i class="fab fa-linkedin"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@lampungcerdas"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://instagram.com/lampungcerdas"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy;Copyright <strong><span>Lampungcerdas</span>. All Rights Reserved

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('lib/counterup/counterup.min.js') ?>"></script>
    <script src="<?= base_url('lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('lib/tempusdominus/js/moment.min.js') ?>"></script>
    <script src="<?= base_url('lib/tempusdominus/js/moment-timezone.min.js') ?>"></script>
    <script src="<?= base_url('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="<?= base_url('js/main.js') ?>"></script>
    <script type="text/javascript">
    function generatePDF() {
        var nama = "<?php echo $nama ?>";
    
        // Membuat instance jsPDF baru dengan orientasi lanskap
        var doc = new jsPDF('landscape');
    
        // Menambahkan logo
        var logo = new Image();
        logo.crossOrigin = "Anonymous";
        logo.src = "<?= base_url().'assets/img/webinar/'.$foto->sertifikat?>"; // Ganti dengan path file logo di proyek Anda
    
        // Menunggu logo selesai dimuat sebelum menggambar di PDF
        logo.onload = function() {
        var canvasWidth = doc.internal.pageSize.getWidth();
        var canvasHeight = doc.internal.pageSize.getHeight();
    
        var logoWidth = canvasWidth; // Lebar gambar logo sama dengan lebar kertas
        var logoHeight = logo.height * logoWidth / logo.width; // Menghitung tinggi gambar logo sesuai aspek ratio
    
        var logoX = 0; // Posisi X gambar logo dimulai dari kiri
        var logoY = (canvasHeight - logoHeight) / 2; // Mengatur posisi Y agar gambar logo berada di tengah vertikal
    
        // Menggambar logo di PDF
        doc.addImage(logo, 'PNG', logoX, logoY, logoWidth, logoHeight);
    
        // Mengatur font Poppins
        doc.setFont('Poppins');

        // Mengatur ukuran font dan mengatur teks ke tengah
        doc.setFontSize(30);
        doc.text(nama, canvasWidth / 2, 95, null, null, 'center');
    
        // Simpan PDF dengan nama unik
        doc.save('sertifikat.pdf');
        };
    }
  </script>

    <!-- Template Javascript -->
   
   