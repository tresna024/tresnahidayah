@extends ('layout.main1')
<style>
    .sarana {
        font-family: 'Times New Roman', Times, serif;
    }

    .isi-samping p {
        text-transform: uppercase;
    }

    a:visited {
        color: black
    }

    a:hover {
        color: rgb(24, 24, 74)
    }

    .image-container {
        display: grid;
        place-items: center;
        height: 70vh;
    }

    .image-container img {
        max-width: 80%;
        height: auto;
        border-radius: 20px;
    }

    .arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px;
        border-radius: 50%;
        cursor: pointer;
    }

    .sarana {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .arrow-left {
        left: 10px;
    }

    .arrow-right {
        right: 10px;
    }
</style>

@section('atas')
    <div class="container">
        <div class="sarana" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-8">
                    <p style="font-size: 15px">Beranda > {{ $title }}</p>
                    <hr>
                    <h2><b>Sarana Dan Prasana Asrama</b></h2>
                    <h2><b>Politeknik Negeri Lhokseumawe</b></h2>

                    <div class="image-container">
                        <img src="style/img/gedung_asrama.jpg" alt="Asrama Internasional" class="image">
                        <div class="arrow arrow-left" onclick="prevImage()">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="arrow arrow-right" onclick="nextImage()">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>

                    <div class="text" style="padding-top: 20px; text-align: justify">
                        <p>Kami ingin menciptakan kenyamanan bagi mahasiswa baru yang ingin tinggal di asrama. Semua fasilitas yang kami sediakan telah dirancang untuk memenuhi kebutuhan sehari-hari dan mendukung pengalaman belajar yang optimal. Mulai dari kamar tidur yang nyaman dan berfasilitas lengkap, ruang bersama untuk berinteraksi dan berkumpul bersama teman-teman, hingga fasilitas olahraga dan rekreasi yang memungkinkan untuk beraktivitas fisik dan melepas penat. <br><br>Selain itu, kami juga menyediakan akses internet cepat dan stabil, serta fasilitas studi yang memadai seperti ruang belajar dan perpustakaan. Sistem keamanan yang terjamin dan layanan kebersihan yang baik juga menjadi prioritas kami untuk memastikan lingkungan asrama tetap aman dan bersih. Dengan demikian, mahasiswa baru dapat fokus pada perkembangan akademik mereka tanpa perlu khawatir akan kenyamanan tempat tinggal mereka. Kami berkomitmen untuk terus meningkatkan dan mengelola fasilitas dengan baik agar penghuni asrama merasa seperti di rumah sendiri dan dapat meraih potensi terbaik mereka selama tinggal di sini.</p>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <form method="get">
                        <div class="input-group" style="padding-left: 30px">
                            <input class="form-control" type="text" name="" placeholder="Cari sesuatu..."
                                aria-label="Tombol Cari" aria-describedby="tombol-cari">
                        </div>
                    </form>
                    <div class="text-samping" style="padding-left: 30px; padding-top: 50px;">
                        <div class="judul">
                            <h3>Recent Post</h3>
                            <hr>
                        </div>
                        <div class="isi-samping">
                            <a href="/kegiatan">
                                <p>Kegiatan Gotong Royong mahasiswa Asrama Politeknik Negeri Lhokseumawe</p>
                            </a>
                            <hr>
                            <a href="/kegiatan2">
                                <p>Acara perpisahan warga asrama yang telah selesai masa studi nya</p>
                            </a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        let images = [
            "style/img/gedung_asrama.jpg",
            "style/img/parkiran.jpg",
            "style/img/kamar_tidur.jpeg",
            "style/img/gedung_serbaguna.jpg"
        ];

        let currentImageIndex = 0;

        function prevImage() {
            currentImageIndex--;
            if (currentImageIndex < 0) {
                currentImageIndex = images.length - 1;
            }
            document.querySelector(".image").src = images[currentImageIndex];
        }

        function nextImage() {
            currentImageIndex++;
            if (currentImageIndex >= images.length) {
                currentImageIndex = 0;
            }
            document.querySelector(".image").src = images[currentImageIndex];
        }
    </script>
@endsection
