<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Asrama | {{ $title }}</title>
    <!-- favicon -->
    <link rel="icon" href="{{ 'style/img/logo_pnl.png' }}">
    <!-- boostrap -->
    <link rel="stylesheet" href="{{ 'style/css/bootstrap.min.css' }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ 'style/css/owl.carousel.min.css' }}">
    <!-- font awesome -->
    <link rel="stylesheet" href="{{ 'style/fontawesome/css/all.min.css' }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ 'style/css/style.css' }}">
</head>

<body>
    @include('partial.nav')

    @yield('atas')
</body>

<!-- bagian footer -->
<section class="sosmed" id="sosmed">
    <div class="row">
        <div class="col-lg-4 gambar-text">
            <ul class="gambar">
                <li><img src="{{ 'style/img/logo_pnl.png' }}" alt=""></li>
                <li><img src="{{ 'style/img/IKPAS.png' }}" alt=""></li>
            </ul>
            <h1><span style="letter-spacing: 10px;">asrama</span><br>politeknik negeri Lhokseumawe</h1>
            <p>Jl. Banda Aceh-Medan Km. 280,3, Buketrata,<br> Mesjid Punteut, Blang Mangat, Kota Lhokseumawe, 24301,
                <br>Aceh, Indonesia
            </p>
        </div>
        <div class="col-lg-2" style="margin-left: 40px;">
            <p style="color: #fff; text-transform: uppercase;">Tentang Kami</p>
            <ul class="menu">
                <li><a href="#">
                        <p>Sejarah</p>
                    </a></li>
                <li><a href="#">
                        <p>Visi dan Misi</p>
                    </a></li>
                <li><a href="#">
                        <p>Struktur Organisasi</p>
                    </a></li>
                <li><a href="#">
                        <p>Fasilitas</p>
                    </a></li>
            </ul>
        </div>
        <div class="col-lg-2" style="margin-left: -60px;">
            <p style="color: #fff; text-transform: uppercase;">Asrama Kami</p>
            <ul class="menu_asrama">
                <li><a href="#">
                        <p>Asrama Putra PNL</p>
                    </a></li>
                <li><a href="#">
                        <p>Asrama Putri PNL</p>
                    </a></li>
            </ul>
        </div>
    </div>
</section>

<footer>
    <p>&copy; politeknik negeri Lhokseumawe</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="{{ 'style/js/style.js' }} "></script>
<script src="{{ 'style/js/jquery-3.3.1.slim.min.js' }} "></script>
<script src="{{ 'style/js/bootstrap.min.js' }} "></script>
<script src="{{ 'style/js/owl.carousel.min.js' }} "></script>
<script src="{{ 'style/js/main.js' }} "></script>

</body>

</html>
