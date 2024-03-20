<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/icon.ico') }}">
    <title>Layanan PT.SUCOFINDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/layanan.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic);
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);
        @import url(https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic);

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

    </style>
</head>

<body>
    <header>
        @include('nav.navbar')
    </header>

    <main>
        <div class="container-fluid p-0 background-image-container">
            <div class="center-left-text">
                <h1>Layanan PT.SUCOFINDO</h1>
            </div>
        </div>

        <a href="{{ route('home') }}" class="Beranda">Beranda</a> <span> > </span>
        <a href="{{ route('layanan') }}" class="Layanan">Layanan</a>

        <section class="sertifikasi-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">Sertifikasi</h2>
                    <div class="gradient-line-left"></div>
                    <p class="section-content">Layanan PT SUCOFINDO sebagai lembaga sertifikasi membantu perusahaan
                        untuk membuktikan komitmen terhadap kualitas, lingkungan, keselamatan dan kesehatan kerja,
                        tanggung jawab sosial serta ketentuan nasional dan internasional.</p>
                    <p class="section-content">Dengan cakupan sertifikasi yang luas dan kemampuan untuk memperoleh
                        akreditasi secara nasional,
                        PT SUCOFINDO menyediakan jasa sertifikasi yang meliputi sertifikasi laik fungsi, sertifikasi
                        GMP, sertifikasi SNI, Gas Rumah Kaca, GMP, dan sertifikasi halal.</p>
                </div>
                <div class="col-md-6">
                    <img src="https://www.sucofindo.co.id/wp-content/uploads/2023/08/SUCOFINDO-Serahkan-Sertifikat-Green-Building-untuk-SMI-.jpeg"
                        class="img-fluid" alt="Gambar Section Baru">
                </div>
            </div>
        </div>
        </section>

        <section class="Konsultasi-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://www.sucofindo.co.id/wp-content/uploads/2024/02/9-Pentingnya-Inspeksi-Batubara-dalam-Menjamin-Kualitas-Bahan-Bakar.jpg"
                        class="img-fluid" alt="Gambar Section Baru">
                </div>
                <div class="col-md-4">
                    <h2 class="section-title">Jasa Konsultasi</h2>
                    <div class="gradient-line-left"></div>
                    <p class="section-content">PT SUCOFINDO menyediakan jasa konsultansi untuk perusahaan di berbagai
                        level dengan fleksibel tinggi, proses komprehensif, serta solusi yang menjawab tantangan pasar
                        era digital. Jasa ini meliputi konsultansi K3, jasa konsultansi pertambangan, survey topografi,
                        eksplorasi minyak bumi, energi terbarukan, serta lingkungan.</p>
                    <p class="section-content">PT SUCOFINDO mendedikasikan diri untuk menjadi perusahaan kelas dunia
                        yang dapat menjamin kepastian berusaha dengan objektif dan kredibel. Untuk mencapai tujuan
                        tersebut, PT SUCOFINDO menyediakan berbagai jenis produk konsultansi</p>
                </div>
            </div>
        </div>
    </section>

        <section class="inspeksi-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">Inspeksi dan Audit</h2>
                    <div class="gradient-line-left"></div>
                    <p class="section-content">Layanan jasa pelatihan PT SUCOFINDO meliputi mempertimbangkan
                        faktor-faktor seperti sistem manajemen mutu, lingkungan, keselamatan dan kesehatan kerja, serta
                        pengamanan untuk membantu perusahaan meningkatkan kompetensi. Dalam layanan ini, PT SUCOFINDO
                        menyediakan pelatihan sumber daya manusia, pelatihan sistem manajemen mutu, pelatihan pertanian,
                        reklamasi tambang, SROI, dan pelatihan keselamatan kerja.</p>
                </div>
                <div class="col-md-6">
                    <img src="https://www.sucofindo.co.id/wp-content/uploads/2023/04/Foto-Thumbnail.jpg"
                        class="img-fluid" alt="Gambar Section Baru">
                </div>
            </div>
        </div>
    </section>

        <section class="pelatihan-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://www.sucofindo.co.id/wp-content/uploads/2023/01/Jenis-jenis-Pelatihan.jpg"
                        class="img-fluid" alt="Gambar Section Baru">
                </div>
                <div class="col-md-6">
                    <h2 class="section-title">Pelatihan</h2>
                    <div class="gradient-line-left"></div>
                    <p class="section-content">PT SUCOFINDO menyediakan layanan pengujian dan analisis untuk membantu
                        perusahaan terus mengembangkan kualitas bisnis agar sesuai dengan standar dan persyaratan yang
                        ditetapkan.</p>
                    <p class="section-content">Dengan lebih dari 65 laboratorium tersebar di seluruh Indonesia,
                        fasilitas dan layanan Lembaga PT SUCOFINDO sebagai lembaga pengujian dan analisis meliputi
                        laboratorium uji lingkungan, laboratorium makanan, pemantauan kualitas lingkungan, NDT Testing,
                        kalibrasi alat kesehatan, sparing klhk, fumigasi, kalibrasi tangki, serta kalibrasi alat ukur.
                    </p>
                </div>
            </div>
        </div>
    </section>

        <section class="pengujian-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">Pengujian dan Analisis</h2>
                    <div class="gradient-line-left"></div>
                    <p class="section-content">Layanan jasa pelatihan PT SUCOFINDO meliputi mempertimbangkan
                        faktor-faktor seperti sistem manajemen mutu, lingkungan, keselamatan dan kesehatan kerja, serta
                        pengamanan untuk membantu perusahaan meningkatkan kompetensi. Dalam layanan ini, PT SUCOFINDO
                        menyediakan pelatihan sumber daya manusia, pelatihan sistem manajemen mutu, pelatihan pertanian,
                        reklamasi tambang, SROI, dan pelatihan keselamatan kerja.</p>
                </div>
                <div class="col-md-6">
                    <img src="https://www.sucofindo.co.id/wp-content/uploads/2023/04/thumbnail-artikel-website.jpg"
                        class="img-fluid" alt="Gambar Section Baru">
                </div>
            </div>
        </div>
    </section>
    </main>

    <footer>
        @include('footer.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
