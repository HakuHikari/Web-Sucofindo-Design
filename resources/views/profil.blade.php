<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/icon.ico') }}">
    <title>Profil Kantor</title>
    <link
        href="https://fonts.googleapis.com/css?family=Merriweather:300,300italic,regular,italic,700,700italic,900,900italic"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/profil.css">

    <style>
        .background-image-container {
            background-image: url('img/gedung.jpg');
            background-size: cover;
            background-position: center;
            height: 40vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 50px;
        }


        .Beranda {
            font-family: 'Poppins';
            font-size: 14px;
            font-weight: 500;
            color: #1795D1;
            margin-left: 40px;
            text-decoration: none;
        }

        .Profil {
            color: #1795D1;
            font-family: 'Poppins';
            font-size: 14px;
            font-weight: 500;
            color: #1795D1;
            text-decoration: none;
        }

    </style>

</head>

<body>
    <header id="navbar">
        @include('nav.navbar')
    </header>


    <main>
        <div class="container-fluid p-0 background-image-container">
            <div class="center-left-text">
                <h1>Profil kantor</h1>
            </div>
        </div>

        <a href="{{ route('home') }}" class="Beranda">Beranda</a> <span> > </span>
        <a href="{{ route('profil') }}" class="Profil">Profil</a>

        <div class="sejarah-section">
            <div class="container mt-5">
                <div class="content-text">
                    <h3>Sejarah SUCOFINDO</h3>
                    <div class="gradient-line"></div>
                    <div class="row">
                        <div class="col-md-6 p-sejarah">
                            <p>SUCOFINDO merupakan perusahaan inspeksi yang didirikan pada tahun 1956 oleh Pemerintah
                                Republik
                                Indonesia. Sebagai lembaga independen, SUCOFINDO telah berperan dalam mengawasi kualitas
                                produk
                                dan
                                layanan di berbagai sektor industri di Indonesia. Dengan pengalaman lebih dari enam
                                dekade,
                                SUCOFINDO terus berkomitmen untuk memberikan layanan terbaik kepada pelanggan dan
                                masyarakat.
                            </p>
                            <p>Di era globalisasi ini, SUCOFINDO telah melakukan berbagai transformasi untuk tetap
                                menjadi
                                pilihan
                                utama dalam layanan inspeksi, pengujian, sertifikasi, dan konsultasi. Dengan dukungan
                                teknologi
                                dan
                                SDM yang berkualitas, SUCOFINDO siap memenuhi kebutuhan industri dan menghadapi
                                tantangan
                                masa
                                depan.</p>
                        </div>
                        <div class="col-md-6 img-sejarah">
                            <div class="image-sejarah">
                                <img src="https://emitennews.com/uploads/news/image_1653490136.jpg" alt="Gedung"
                                    width="550" height="350">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="visi-section">
            <div class="container">
                <h3 class="h1-visi-misi">Visi Dan Misi</h3>
                <div class="gradient-line-center"></div>
                <section class="mx-auto my-5 cards-container">
                    <div class="card">
                        <div class="card-body">
                            <blockquote class="blockquote blockquote-custom bg-white px-3 pt-4">
                                <div class="blockquote-custom-icon bg-info shadow-1-strong">
                                    Visi
                                </div>
                                <p class="mb-0 mt-2 font-italic">
                                    "Menjadi Perusahaan Kelas Dunia yang kompetitif, andal dan terpercaya di bidang
                                    inspeksi, pengujian, sertifikasi, konsultasi, dan pelatihan."
                                </p>
                            </blockquote>

                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <blockquote class="blockquote blockquote-custom bg-white px-3 pt-4">
                                <div class="blockquote-custom-icon bg-info shadow-1-strong">
                                    Misi
                                </div>
                                <p class="mb-0 mt-2 font-italic">
                                    "Menciptakan nilai ekonomi kepada para pemangku kepentingan terutama pelanggan,
                                    pemegang saham dan pegawai melalui layanan jasa inspeksi, pengujian, sertifikasi,
                                    konsultansi serta jasa terkait lainnya untuk menjamin kepastian berusaha."
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="map-container">
            <div class="container">
                <h3 class="h3-hubungi">Hubungi Kami dan Kunjungi Kantor Kami</h3>
                <div class="gradient-line-right"></div>
                <div class="row">
                    <div class="col-md-6 map">
                        <iframe
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=-2.931759002500041,%20104.70524677876487+(Sucofindo%20Cab.Palembang)&amp;t=k&amp;z=20&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
                    </div>
                    <div class="col-md-6 address">
                        <!-- Tempatkan alamat kantor di sini -->
                        <h3 class="alamat-b">Alamat Kantor</h3>
                        <p class="alamat-p"> Jl. Soekarno Hatta No.1901, Karya Baru, Kec. Alang-Alang Lebar, Kota
                            Palembang, Sumatera Selatan 30961</p>
                        <p class="alamat-p">Email: customer.service@sucofindo.co.id</p>
                        <p class="alamat-p">Telepon: +62-21 – 7983666</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        @include('footer.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
