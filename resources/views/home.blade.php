<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCOFINDO - Lembaga Pengujian, Inspeksi, dan Sertifikasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/home.css">
</head>

<style>
    .layanan-section h2 {
        font-family: "Poppins", sans-serif;
        font-weight: 700;
        font-size: 3rem;
        /* Menggunakan gradien biru */
        background-image: linear-gradient(to right, #003366, #0080c6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-align: center;
        margin-bottom: 2rem;
        text-transform: uppercase;
    }

    .layanan-section h2::after {
        content: "";
        display: block;
        width: 50%;
        height: 4px;
        /* Menggunakan gradien biru */
        background-color: #003380;
        background-image: linear-gradient(to right, #0077c2, #0a5d9d);
        margin: 0 auto;
        margin-top: 1rem;
    }

    .carousel {
        width: 100% !important;
    }

    .carousel-inner {
        width: 100% !important;
    }

    .carousel-item img {
        width: 100% !important;
        max-height: 720px!important;
        object-fit: cover;
    }

    08117870702
</style>

<body>
    <header>
        @include('nav.navbar')
    </header>

    <main>

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/IMG_3567.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/img_3565.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/img_3724.jpg" class="d-block w-100" alt="...">
                        </div>
                        <!-- Tambahkan lebih banyak carousel-item sesuai kebutuhan -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>



        <section class="hero-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>SUCOFINDO : Partner Terpercaya untuk Solusi Pengujian, Inspeksi, dan Sertifikasi</h1>
                        <p class="lead">SUCOFINDO adalah perusahaan BUMN yang bergerak di bidang jasa pengujian,
                            inspeksi, dan sertifikasi (TIS). Kami memiliki pengalaman lebih dari 50 tahun dalam membantu
                            berbagai industri di Indonesia untuk memastikan kualitas produk, keamanan proses, dan
                            kepatuhan terhadap regulasi.</p>
                        <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                    </div>
                    <div class="col-md-6">
                        <img src="https://www.sucofindo.co.id/wp-content/uploads/2023/10/SUCOFINDO-Dukung-Bursa-Karbon-Sediakan-Layanan-Validasi-Verifikasi-GRK-dan-NEK-Terakreditasi-2.jpeg"
                            alt="Hero Image" class="img-fluid hero-img">
                    </div>
                </div>
            </div>
        </section>

        <section class="layanan-section py-5">
            <div class="container">
                <h2 class="text-center mb-4">Layanan dan Jasa PT SUCOFINDO melingkupi berbagai sektor</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 mb-4">
                            <div style="width: 75px; height: 75px; margin-left: 5px; overflow: hidden;">
                                <img src="img/pengujian.png" alt="Layanan 1" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h3 class="card-title">Pengujian</h3>
                                </div>
                                <p class="card-text">SUCOFINDO menyediakan berbagai layanan pengujian untuk berbagai
                                    jenis produk, seperti makanan, minuman, bahan kimia, farmasi, dan lainnya.</p>
                                <a href="#" class="card-link">Selengkapnya ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 mb-4">
                            <div style="width: 75px; height: 75px; margin-left: 5px; overflow: hidden;">
                                <img src="img/inspeksi.png" alt="Layanan 2" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h3 class="card-title">Inspeksi</h3>
                                </div>
                                <p class="card-text">SUCOFINDO menyediakan layanan inspeksi untuk berbagai jenis aset,
                                    seperti infrastruktur, bangunan, mesin, dan lainnya.</p>
                                <a href="#" class="card-link">Selengkapnya ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 mb-4">
                            <div style="width: 75px; height: 75px; margin-left: 5px; overflow: hidden;">
                                <img src="img/sertifikat.png" alt="Layanan 3" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h3 class="card-title">Sertifikasi</h3>
                                </div>
                                <p class="card-text">SUCOFINDO memberikan layanan sertifikasi untuk memastikan kepatuhan
                                    terhadap standar kualitas dan keamanan yang berlaku.</p>
                                <a href="#" class="card-link">Selengkapnya ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 mb-4">
                            <div style="width: 75px; height: 75px; margin-left: 10px; overflow: hidden;">
                                <img src="img/konsultasi.png" alt="Layanan 4" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h3 class="card-title">Konsultasi</h3>
                                </div>
                                <p class="card-text">Layanan konsultasi SUCOFINDO membantu perusahaan dan industri untuk meningkatkan efisiensi,
                                    produktivitas, dan kepatuhan terhadap regulasi.</p>
                                <a href="#" class="card-link">Selengkapnya ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 mb-4">
                            <div style="width: 75px; height: 75px; margin-left: 10px; overflow: hidden;">
                                <img src="img/pelatihan.png" alt="Layanan 5" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h3 class="card-title">Pelatihan</h3>
                                </div>
                                <p class="card-text">SUCOFINDO menyediakan berbagai program pelatihan untuk meningkatkan
                                    kompetensi SDM di berbagai bidang.</p>
                                <a href="#" class="card-link">Selengkapnya ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer>
        @include('footer.footer')
    </footer>


    <!-- JavaScript dan lain-lain -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
