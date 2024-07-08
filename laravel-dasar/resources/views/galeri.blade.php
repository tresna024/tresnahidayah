@extends ('layout.main1')
<style>
    .galeri {
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

    .text ol li {
        text-align: justify
    }

    .view-all a:visited {
        color: blue;
    }

    .view-all a:hover {
        color: black;
    }
</style>

@section('atas')
    <div class="container">
        <div class="galeri" style="margin-top: 50px">
            <div class="row">
                <div class="col">
                    <p style="font-size: 15px">Beranda > {{ $title }}</p>
                    <hr>
                    <h3><b>Foto Dokumentasi Kegiatan<br>Warga Asrama Politeknik Negeri Lhokseumawe</b></h3>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card" style="width: 15rem;">
                        <img src="style/img/gambar_kegiatan.jpg" class="card-img-top" alt=".gotong_royong">
                        <div class="card-body">
                            <p class="card-text">Kegiatan Gotong royong Rutin</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 15rem;">
                        <img src="style/img/kegiatan2.jpg" class="card-img-top" alt=".gotong_royong">
                        <div class="card-body">
                            <p class="card-text">Acara Perpisahan Abang dan Kakak yg sudah selesai</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 15rem; height: 23.5rem;">
                        <img src="style/img/galeri1.jpg" class="card-img-top" alt="gotong_royong">
                        <div class="card-body">
                            <p class="card-text">Pelatihan LKD yang diikuti mahasiswa Asrama</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 15rem; height: 23.5rem;">
                        <img src="style/img/galeri2.jpg" class="card-img-top" alt="gotong_royong">
                        <div class="card-body">
                            <p class="card-text">Tanding Sepak bola</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
