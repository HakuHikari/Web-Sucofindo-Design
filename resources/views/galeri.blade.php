<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeri</title>
    <link
        href="https://fonts.googleapis.com/css?family=Merriweather:300,300italic,regular,italic,700,700italic,900,900italic"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic);


        .background-image-container {
            background-image: url('img/galeri.jpg');
            background-size: cover;
            background-position: center;
            height: 40vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 50px;
        }

        .center-left-text {
            text-align: left;
            color: white;
            font-family: "Montserrat";
            font-size: 40px;
            font-weight: 600;
            padding-left: 40px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);

        }

        .Beranda {
            font-family: 'Poppins';
            font-size: 14px;
            font-weight: 500;
            color: #1795D1;
            margin-left: 40px;
            text-decoration: none;
        }

        .Galeri {
            color: #1795D1;
            font-family: 'Poppins';
            font-size: 14px;
            font-weight: 500;
            color: #1795D1;
            text-decoration: none;

        }


        .container-fluid-galeri {
            background: linear-gradient(to top, #09203f 0%, #537895 100%);
            margin-top: 50px;
            padding-top: 30px;
        }

        .title-text {
            color: white;
            font-family: "Poppins", sans-serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-size: 30px;
            font-weight: 700;
        }

        .gradient-line {
            width: 20%;
            height: 6px;
            background: linear-gradient(to right, orange, white);
            margin-bottom: 40px;

        }

        .carousel-item img {
            height: 575px !important;
            /* Sesuaikan tinggi sesuai kebutuhan */
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
                <h1>Galeri</h1>
            </div>
        </div>

        <a href="{{ route('home') }}" class="Beranda">Beranda</a> <span> > </span>
        <a href="{{ route('galeri') }}" class="Galeri">Galeri</a>


        <div class="container-fluid container-fluid-galeri">
            <div class="container-xxl">
                <h1 class="title-text">Galeri Kegiatan SUCOFINDO</h1>
                <div class="gradient-line"></div>
                <div class="row">
                    <div class="col-md-8">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/img_3565.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/img_3567.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/img_3568.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="img/img1.jpg" class="img-fluid mb-3" alt="Gambar Section Baru">
                        <img src="img/img2.jpg" class="img-fluid mb-3" alt="Gambar Section Baru">
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
<!-- background: linear-gradient(to top, #09203f 0%, #537895 100%); -->
