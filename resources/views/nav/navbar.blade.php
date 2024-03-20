<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tautan ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<style>
      @import url(https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic);
        @import url(https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic);

    .navbar-line {
        height: 2px;
        background-color: #003380;
        margin-top: -1px;
        /* Sesuaikan margin-top untuk posisi garis */
    }

    .navbar-brand img {
        margin-left: 10px;
    }

    .nav-item {
        margin-left: 10px;
    }

    @media (max-width: 991px) {
        .navbar-nav {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    .navbar-nav .nav-item a.nav-link {
        font-family: 'Montserrat';
        font-weight: 600;
        color: #423942;
        font-size: 15px;
    }

    .navbar-nav .nav-item a.nav-link:hover {
        color: blue;
        /* Mengubah warna teks menjadi biru saat dihover */
    }

    .dropdown-menu {
        animation: none;
        /* Disable default Bootstrap animation */
    }

    /* Animation for opening the dropdown */
    .dropdown:hover .dropdown-menu {
        display: block;
        animation: dropdown-show 0.3s ease-in-out forwards;
    }

    .dropdown>.dropdown-toggle:active {
        /*Without this, clicking will make it sticky*/
        pointer-events: none;
    }

    @keyframes dropdown-show {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Animation for closing the dropdown (triggered using JavaScript) */
    .dropdown.show .dropdown-menu {
        animation: dropdown-hide 0.3s ease-in-out forwards;
    }

    @keyframes dropdown-hide {
        from {
            opacity: 1;
            transform: translateY(0);
        }

        to {
            opacity: 0;
            transform: translateY(-10px);
        }
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="https://www.sucofindo.co.id/wp-content/uploads/2022/09/Sucofindo_Utama.png" alt="Logo"
                    width="110" height="70" class="d-inline-block align-text-top p-0">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="layanan">Layanan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profil">Profil Perusahaan</a></li>
                            <li><a class="dropdown-item" href="artilogo">Arti Logo</a></li>
                            <li><a class="dropdown-item" href="struktur">Struktur Organisasi Perusahaan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri">Galeri</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="nav-item me-3">
                        <a class="nav-link">
                            <i class="fas fa-clock"></i> Senin - Jumat: 08:00 - 17:00
                        </a>
                    </div>
                    <div class="nav-item ">
                        <a class="nav-link" href="mailto:customer.service@sucofindo.co.id">
                            <i class="fas fa-envelope"></i> customer.service@sucofindo.co.id
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="navbar-line"></div>

</body>

</html>
