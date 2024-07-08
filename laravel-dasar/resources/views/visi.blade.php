@extends ('layout.main1')
<style>
    .visi {
        font-family: 'Times New Roman', Times, serif;
    }

    .isi p {
        text-transform: uppercase;
    }

    .isi a:visited {
        color: black;
    }

    .isi a:hover {
        color: rgb(253, 159, 9);
    }

    .text p {
        font-size: 15px
    }

    .view-all a:visited{
        color: blue;
    }

    .view-all a:hover{
        color: black;
    }
</style>

@section('atas')
    <div class="container">
        <div class="visi" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-8">
                    <h4>Visi & Misi</h4>
                    <hr>
                    <div class="text" style="padding-top: 20px;">
                        <p style="font-size: 15px; text-transform: uppercase">Visi</p>
                        <ul>
                            <li>
                                <p>Menjadi asrama yang menyediakan lingkungan hunian yang aman, nyaman, dan mendukung pengembangan akademik serta karakter mahasiswa untuk mencapai prestasi unggul dan berdaya saing global</p>
                            </li>
                        </ul>
                        <p style="font-size: 15px; text-transform: uppercase">Misi</p>
                        <ul>
                            <li>
                                <p>Menyediakan fasilitas hunian yang berkualitas tinggi, aman, bersih, dan nyaman untuk mendukung kehidupan sehari-hari mahasiswa.</p>
                            </li>
                            <li>
                                <p>Membantu mahasiswa mencapai prestasi akademik yang optimal dengan menyediakan lingkungan belajar yang kondusif, termasuk ruang belajar, akses internet yang cepat, dan fasilitas pendukung akademik lainnya.
                                </p>
                            </li>
                            <li>
                                <p>Menyelenggarakan berbagai kegiatan dan program yang bertujuan untuk mengembangkan karakter, keterampilan sosial, kepemimpinan, dan kreativitas mahasiswa.
                                </p>
                            </li>
                            <li>
                                <p>Menciptakan lingkungan yang inklusif dan ramah, di mana semua penghuni merasa dihargai, diterima, dan didukung terlepas dari latar belakang mereka.
                                </p>
                            </li>
                        </ul>
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
                        <div class="isi">
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
@endsection
