@extends ('layout.main1')
<style>
    .red-more a:visited {
        color: #073C64;
    }

    .red-more a:hover {
        color: #FFE100;
    }

    .baca a:visited {
        color: #ffff;
    }

    .baca a:hover {
        color: #FFE100;
    }

    .galeri-foto {
        display: flex;
        flex-direction: column;
        align-items: left;
    }

    .galeri-foto img {
        padding: 10px 0;
        margin-left: -130px;
    }

    .gambar img {
        display: block;
        transition: transform 0.3s, filter 0.3s;
        /* Animasi smooth */
    }

    .gambar:hover img {
        transform: scale(1.1);
        /* Memperbesar gambar saat hover */
        filter: brightness(1.2);
        /* Menambahkan efek kecerahan */
    }

    .gambar:hover .hover-text {
        opacity: 1;
        /* Menampilkan teks saat hover */
    }

    .isi a {
        text-decoration: none;
        color: rgb(63, 62, 62)
    }

    .isi a:hover {
        color: #FFE100
    }
</style>

@section('atas')
    <!-- section hero area -->
    <section id="hero-area">
        <div id="slider-hero-nav"></div>
        <div class="owl-carousel" id="slider-hero">
            <div class="slider-item">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="slider-item-img">
                            <img src="style/img/kamar_tidur.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 bg">
                        <div class="slider-item-content">
                            <h2>Mewujudkan hunian yang aman dan terkendali bagi
                                Mahasiswa Politeknik Negeri Lhokseumawe</h2>
                            <p>Salah satu strategi dari asrama PNL ialah mewujudkan hunian yang nyaman aman serta
                                terkendali. Dengan berbagai macam sarana dan prasarana yang tersedia di dalam nya</p>
                            <a href="#" style="color: #FFE100; font-size: 10px; letter-spacing: 1.5px;">BACA
                                SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
            </div> <!--slider-item-->

            <div class="slider-item">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="slider-item-img">
                            <img src="style/img/kamar_mandi.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 bg">
                        <div class="slider-item-content">
                            <h2>Menjadi Asrama ini yang mengedepankan fasilitas yang bersih, aman dan nyaman</h2>
                            <p>Salah satu strategi dari asrama PNL ialah mewujudkan fasilas yang nyaman aman serta
                                bersih. Agar Mahasiswa Nyaman Tinggal di Asrama</p>
                            <a href="#" style="color: #FFE100; font-size: 10px; letter-spacing: 1.5px;">BACA
                                SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
            </div> <!--slider item-->

            <div class="slider-item">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="slider-item-img">
                            <img src="style/img/gambar_kegiatan.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 bg">
                        <div class="slider-item-content">
                            <h2>Menjadi mahasiswa yang tinggal di Asrama menjadi lebih Produktif</h2>
                            <p>Merupakan salah satu cara kami agar dapat meningkatkan produktivitas dari mahasiswa dengan memberikan mereka kegiatan yang bermanfaat.</p>
                            <a href="#" style="color: #FFE100; font-size: 10px; letter-spacing: 1.5px;">BACA
                                SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
            </div> <!--slider item-->

        </div>

    </section>

    <!-- section bagian asrama -->
    <section>
        <div class="asrama" id="asrama-home">
            <!-- bagian text -->
            <div class="row">
                <div class="col-lg-8">
                    <p class="text"><b>A s r a m a </b></p>
                </div>
                <div class="col-lg-4">
                    <p class="text"><b>Pendaftaran</b></p>
                </div>
            </div>

            <!-- bagian garis nya -->
            <div class="row">
                <div class="col-lg-8">
                    <hr style="border-bottom: 1px solid ;">
                </div>
                <div class="col col-lg-4">
                    <hr style="border-bottom: 1px solid ;">
                </div>
            </div>

            <!-- bagian isi nya -->
            <div class="row">
                <div class="col-lg-3">
                    <img src="style/img/gambar_kegiatan.jpg" alt="">
                </div>
                <div class="col-lg-5">
                    <div class="isi">
                        <a href="#">
                            <h3 style="font-family: 'Times New Roman', Times, serif; padding-bottom: 10px;">Kegiatan Gotong Royong mahasiswa Asrama Politeknik Negeri Lhokseumawe</h3>
                        </a>
                        <p>Kegiatan gotong royong seperti ini rutin di lakukan pada hari sabtu dan minggu, guna untuk membersihkan halaman Asrama dan menjalin silahturahmi dengan sesama warga asrama</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="/pendaftaran"><button class="btn btn-pendaftaran"><b>pendaftaran</b></button></a>
                    <button class="btn btn-download"><b>download pnl residence</b></button>
                </div>
            </div>

            <!-- bagian text organisasi -->
            <div class="row">
                <div class="col-lg-8">
                </div>
                <div class="col-lg-4">
                    <p class="text"><b>Organisasi</b></p>
                </div>
            </div>

            <!-- bagian garis nya -->
            <div class="row">
                <div class="col-lg-8">
                    <hr style="border-bottom: 1px solid ;">
                </div>
                <div class="col col-lg-4">
                    <hr style="border-bottom: 1px solid ;">
                </div>
            </div>

            <!-- bagian isi nya -->
            <div class="row">
                <div class="col-lg-3">
                    <img src="style/img/kegiatan2.jpg" alt="">
                </div>
                <div class="col-lg-5">
                    <div class="isi">
                        <a href="/kegiatan">
                            <h3 style="font-family: 'Times New Roman', Times, serif; padding-bottom: 10px;">Acara perpisahan warga asrama yang telah selesai masa studi nya</h3>
                        </a>
                        <p>Kegiatan ini di lakukan setiap 1 tahun sekali, kegiatan ini bertujuan untuk tetap saling merasa keluarga meskipun sudah tidak tinggal di asrama lagi</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logoikpas"
                        style="height: 90%; width: 55%;position: absolute;padding-top: 10px;top: 50%;left: 50%; transform: translate(-50%, -50%);">
                        <img src="style/img/IKPAS.png" alt="">
                    </div>
                </div>
            </div>

            <!-- bagian garis nya -->
            <div class="row">
                <div class="col-lg-8">
                    <hr style="border-bottom: 1px solid ;">
                </div>
            </div>

            <!-- bagian red more-->
            <div class="red-more">
                <div class="row">
                    <div class="col-lg-8">
                        <a href="/Kegiatan Warga Asrama"
                            style="font-size: 15px; letter-spacing: 1.5px; padding-left: 800px; font-family: lora; text-transform: uppercase">
                            <b>Read More ></b></a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- bagian fasilitas -->
    <section>
        <div class="fasilitas" id="fasilitas">
            <div class="text">
                <p><b>fasilitas</b></p>
            </div>
            <!-- content gambar -->
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="style/img/kamar_mandi.jpg" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="style/img/gedung_serbaguna.jpg" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="style/img/parkiran.jpg" alt="">
                    </div>
                </div>
                <!-- keterangan -->
                <div class="row" style="padding-bottom: 30px;">
                    <div class="col-lg-4">
                        <p><b>Kamar Mandi</b></p>
                    </div>
                    <div class="col-lg-4">
                        <p><b>Gedung Serba guna</b></p>
                    </div>
                    <div class="col-lg-4">
                        <p><b>Tempat Parkiran</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- bagian fasilitas -->
    <section>
        <div class="fasilitas" id="video">
            <div class="text">
                <p><b>Galeri</b></p>
            </div>
            <!-- content gambar -->
            <div class="content">
                <div class="row">
                    <div class="col-lg-8">
                        <iframe width="670" height="440"
                            src="https://www.youtube.com/embed/XzWiLQGmOmA?si=HfjvRQ6kmkY08tdS"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                            style="margin: 57px 160px 80px; padding-right: 30px;border-right: 1px solid #6eacdc;"></iframe>
                    </div>
                    <div class="col-lg-4">
                        <div class="galeri-foto">
                            <div class="gambar">
                                <a href="">
                                    <img src="style/img/galeri1.jpg" alt=""
                                        style="width: 280px; height: 150px;">
                                </a>
                            </div>
                            <div class="gambar">
                                <a href="">
                                    <img src="style/img/galeri2.jpg" alt=""
                                        style="width: 280px; height: 150px;">
                                </a>
                            </div>
                            <div class="gambar">
                                <a href="">
                                    <img src="style/img/kegiatan2.jpg" alt=""
                                        style="width: 280px; height: 150px;">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="baca" style="margin-top : -10px;">
                        <a href="/Galeri"
                            style="font-size: 13px; letter-spacing: 1.5px; padding-left: 1050px; font-family: Montserrat; text-transform: uppercase;"><b>temukan
                                lebih banyak ></b></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
