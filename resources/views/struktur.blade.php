<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/icon.ico') }}">
    <title>Struktur Organisasi Perusahaan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-nmEq8r3eYnjvLNjhNsP3Y/7oIUgCmO3odYpSLc/dsuGrPhZggxqVbSXvGaKb1zflW9TxgjJk+EAVLjRb7tm6ow=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/struktur.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic);
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);


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
    <header>
        @include('nav.navbar')
    </header>

    <main>
        <div class="container-fluid p-0 background-image-container">
            <div class="center-left-text">
                <h1>Struktur Organisasi Perusahaan</h1>
            </div>
        </div>

        <a href="{{ route('home') }}" class="Beranda">Beranda</a> <span> > </span>
        <a href="{{ route('struktur') }}" class="Struktur">Struktur</a>

        <div class="option-container">
            <button class="option" onclick="showContent('dewan-direksi')">Dewan Direksi</button>
            <button class="option" onclick="showContent('dewan-komisaris')">Dewan Komisaris</button>
            <button class="option" onclick="showImage('struktur-perusahaan')">Struktur Perusahaan</button>
        </div>

        <section id="dewan-direksi" class="wrapper" style="display: none">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <div class="card">
                                <img class="img-card"
                                    src="https://www.sucofindo.co.id/wp-content/uploads/2022/09/Jobi-Triananda-Hasjim_Dirut-SUCOFINDO-1.jpg" />
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a>Jobi Triananda Hasjim</a>
                                    </h4>
                                    <p class="keterangan">Direktur Utama</p>
                                </div>
                                <div class="card-read-more">
                                    <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html"
                                        class="btn btn-link btn-block">Selengkapnya></a>
                                    <a href="#" class="edit-icon"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="card">
                                <img class="img-card"
                                    src="https://www.sucofindo.co.id/wp-content/uploads/2022/09/Darwin-Abas.jpg" />
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a>Darwin Abas</a>
                                    </h4>
                                    <p class="keterangan">Direktur Komersial</p>
                                </div>
                                <div class="card-read-more">
                                    <a href="https://codepen.io/wisnust10/full/ZWERZK/"
                                        class="btn btn-link btn-block">Selengkapnya></a>
                                    <a href="#" class="edit-icon"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="card">
                                <img class="img-card"
                                    src="https://www.sucofindo.co.id/wp-content/uploads/2022/09/Budi-Hartanto.jpg" />
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a>Budi Hartanto</a>
                                    </h4>
                                    <p class="keterangan">Direktur Keuangan dan Manajemen Risiko</p>
                                </div>
                                <div class="card-read-more">
                                    <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html"
                                        class="btn btn-link btn-block">Selengkapnya></a>
                                    <a href="#" class="edit-icon"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="card">
                                <img class="img-card"
                                    src="https://www.sucofindo.co.id/wp-content/uploads/2022/09/Johanes-Nanang-Marjianto-1.jpg" />
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a>Johanes Nanang Marjianto</a>
                                    </h4>
                                    <p class="keterangan">Direktur Sumber Daya Manusia</p>
                                </div>
                                <div class="card-read-more">
                                    <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html"
                                        class="btn btn-link btn-block">Selengkapnya></a>
                                    <a href="#" class="edit-icon"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section id="dewan-komisaris" class="wrapper" style="display: none">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <div class="card">
                                <img class="img-card"
                                    src="https://www.sucofindo.co.id/wp-content/uploads/2022/09/Veri-Anggrijono.jpg" />
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a>Veri Anggrijono</a>
                                    </h4>
                                    <p class="keterangan">Komisaris Utama</p>
                                </div>
                                <div class="card-read-more">
                                    <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html"
                                        class="btn btn-link btn-block">Selengkapnya></a>
                                    <a href="#" class="edit-icon"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="card">
                                <img class="img-card"
                                    src="https://www.sucofindo.co.id/wp-content/uploads/2022/09/Zainal-Abidin.jpg" />
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a>Zainal Abidin</a>
                                    </h4>
                                    <p class="keterangan">Komisaris Independen</p>
                                </div>
                                <div class="card-read-more">
                                    <a href="https://codepen.io/wisnust10/full/ZWERZK/"
                                        class="btn btn-link btn-block">Selengkapnya></a>
                                    <a href="#" class="edit-icon"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="card">
                                <img class="img-card"
                                    src="https://www.sucofindo.co.id/wp-content/uploads/2022/09/Himawan-Hariyoga.jpg" />
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a>Himawan Hariyoga</a>
                                    </h4>
                                    <p class="keterangan">Komisaris</p>
                                </div>
                                <div class="card-read-more">
                                    <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html"
                                        class="btn btn-link btn-block">Selengkapnya></a>
                                    <a href="#" class="edit-icon"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="card">
                                <img class="img-card"
                                    src="https://www.sucofindo.co.id/wp-content/uploads/2022/09/Adi-Budiarso.jpg" />
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a>Adi Budiarso</a>
                                    </h4>
                                    <p class="keterangan">Komisaris</p>
                                </div>
                                <div class="card-read-more">
                                    <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html"
                                        class="btn btn-link btn-block">Selengkapnya></a>
                                    <a href="#" class="edit-icon"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="struktur-perusahaan">
            <div id="image-container">
                <img id="gambar" style="display: block">
            </div>
        </section>




    </main>

    <footer>
        @include('footer.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showContent(option) {
            var contentSections = document.querySelectorAll(".wrapper");
            for (var i = 0; i < contentSections.length; i++) {
                contentSections[i].style.display = "none";
            }
            var selectedContent = document.getElementById(option);
            if (selectedContent) {
                selectedContent.style.display = "block";
            }

            // Menyembunyikan gambar ketika memilih opsi selain "Buka Image Struktur Perusahaan"
            var imageContainer = document.getElementById("image-container");
            if (option !== "struktur-perusahaan" && imageContainer) {
                imageContainer.style.display = "none";
            }
        }

        function showImage(option) {
            var contentSections = document.querySelectorAll(".wrapper");
            for (var i = 0; i < contentSections.length; i++) {
                contentSections[i].style.display = "none";
            }
            var imageContainer = document.getElementById("image-container");
            if (option === "struktur-perusahaan" && imageContainer) {
                imageContainer.style.display = "block";
                var image = document.getElementById("gambar");
                image.src =
                    "img/struktur.jpg";
            } else if (imageContainer) {
                imageContainer.style.display = "none";
            }
        }
    </script>


</body>

</html>
