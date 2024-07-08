@extends ('layout.main1')
<style>
    .kegiatan {
        font-family: 'Times New Roman', Times, serif;
    }

    .kegiatan img {
        margin-right: 15px;
    }

    .isi-samping p {
        text-transform: uppercase;
    }

    .satu a:link {
        color: black;
        text-decoration: none;
    }

    .satu a:hover {
        color: yellow;
    }

    .dua a:visited{
        color: #1c96f3;
    }

    .dua a:hover{
        color: black;
    }

    a:visited {
        color: black
    }

    a:hover {
        color: rgb(24, 24, 74)
    }
</style>

@section('atas')
    <div class="container">
        <div class="kegiatan" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-8">
                    <p style="font-size: 15px">Beranda > {{ $title }}</p>
                    <hr>
                    <h3><b>Kegiatan Warga Asrama<br>Politeknik Negeri Lhokseumawe</b></h3>
                    <hr>

                    <div class="gabungan">
                        <img src="style/img/gambar_kegiatan.jpg" alt="img_sejarah" height="150px" class="rounded float-left">
                        <div class="text" style="padding-top: 0px; text-align: justify">
                            <div class="satu">
                                <a href="/kegiatan" style="text-decoration: none">
                                    <h3>Kegiatan Gotong Royong mahasiswa Asrama Politeknik Negeri Lhokseumawe</h3>
                                </a>
                            </div>

                            <p>Kegiatan gotong royong seperti ini rutin di lakukan pada hari sabtu dan minggu, guna untuk membersihkan halaman Asrama dan menjalin silahturahmi dengan sesama warga asrama</p>
                        </div>
                    </div>
                    <hr style="margin-top: 10px">
                    <div class="gabungan">
                        <img src="style/img/kegiatan2.jpg" alt="img_sejarah" height="150px" class="rounded float-left">
                        <div class="text" style="padding-top: 0px; text-align: justify">
                            <div class="satu">
                                <a href="/kegiatan2" style="text-decoration: none">
                                    <h3>Acara perpisahan warga asrama yang telah selesai masa studi nya</h3>
                                </a>
                            </div>

                            <p>Kegiatan ini di lakukan setiap 1 tahun sekali, kegiatan ini bertujuan untuk tetap saling merasa keluarga meskipun sudah tidak tinggal di asrama lagi</p>
                        </div>
                    </div>
                    <hr style="margin-top: 40px">
                </div>


                <div class="col-lg-4 ">
                    <form method="get">
                        <div class="input-group" style="padding-left: 30px">
                            <input class="form-control" type="text" name="" placeholder="Cari sesuatu..."
                                aria-label="Tombol Cari" aria-describedby="tombol-cari">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
