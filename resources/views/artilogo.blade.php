<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arti Logo</title>
    <link rel="shortcut icon" href="{{ asset('img/icon.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Merriweather:300,300italic,regular,italic,700,700italic,900,900italic"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />

    <link rel="stylesheet" href="css/ArtiLogo.css">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic);
        @import url(https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic);
        @import url(https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic);

        /* CSS untuk background image */
        .background-image-container {
            background-image: url('img/gedung.jpg');
            background-size: cover;
            background-position: center;
            height: 40vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 30px;
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
                <h1>Arti Logo</h1>
            </div>
        </div>

        <a href="{{ route('home') }}" class="Beranda">Beranda</a> <span> > </span>
        <a href="{{ route('artilogo') }}" class="Arti-Logo">Arti Logo</a>


        <div class="container container-title">
            <h1 class="title-text"> ARTI LOGO</h1>
            <div class="gradient-line"></div>
        </div>

        <!-- Kontainer untuk konten -->
        <div class="container container-content">
            <div class="content-text">
                <img class="image-pop"
                    src="https://www.sucofindo.co.id/wp-content/uploads/2022/09/Sucofindo_Utama.png" alt="gambar">
                <p>Identitas perusahaan berupa logo TIGA BOLA DUNIA melambangkan kegiatan usaha Perseroan
                    yang memiliki ruang lingkup Internasional dan mempersatukan tiga kawasan
                    usaha yaitu di darat, laut dan udara.
                </p>
                <ul>
                    <li class="li-right">Identitas perusahaan berupa logo TIGA BOLA DUNIA melambangkan kegiatan
                        usaha Perseroan yang memiliki ruang lingkup Internasional dan mempersatukan tiga kawasan
                        usaha yaitu di darat, laut dan udara.</li>
                    <li class="li-right">Warna biru terang, memiliki kesan bersih dan luas, mencerminkan ketertiban,
                        dan keluasan
                        jangkauan usaha.</li>
                    <li class="li-right">Warna biru gradasi menggambarkan nuansa yang melambangkan diversifikasi
                        atau keragaman jenis
                        usaha, serta
                        suatu gerak yang melambangkan suatu sifat yang berorientasi pada perkembangan dan kemajuan
                        masyarakat.</li>
                </ul>
                <p>
                <p><i>Logo type</i> PT SUCOFINDO yang tertera menggunakan huruf microgramma (aerostyle) memiliki
                    kesan
                    tegas, kuat, luas, dan
                    stabil, sehingga sifat ini menimbulkan suatu citra yang sesuai dengan sifat suatu usaha yang
                    senantiasa bersungguh-sungguh
                    dalam setiap komitmen yang berhubungan dengan semua pihak.
                </p>
                <p>
                    <img class="small-image"
                        src="https://www.sucofindo.co.id/wp-content/uploads/2022/12/Logo-IDSurvey_Utama.png"
                        alt="Small Image"> Ikon validasi IDSurvey
                    mengkomunikasikan jaminan kualitas yang akan diberikan oleh IDSurvey kepada seluruh pelanggan.
                </p>
                <p><b>Untuk Logo PT SUCOFINDO high resolution dapat diunduh pada tautan berikut : logoSUCOFINDO</b>
                <div>
                    <a href="https://www.sucofindo.co.id/wp-content/uploads/2022/11/Logo-Sucofindo.zip" download
                        class="download-button">
                        Download Logo (ZIP)
                    </a>
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
