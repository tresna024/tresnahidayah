@extends ('layout.main1')
<style>
    .aturan {
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
        <div class="aturan" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-8">
                    <p style="font-size: 15px">Beranda > {{ $title }}</p>
                    <hr>
                    <h3><b>Aturan Penghuni Asrama 2024/2025</b></h3>
                    <hr>
                    <div class="text" style="padding-top: 20px;">
                        <p style="font-size: 15px; text-transform: uppercase; font-family: Open Sans"><b>aturan asrama politeknik
                                negeri lhokseumawe</b></p>
                        <p style="font-size: 15px; text-transform: uppercase"><b>tahun ajaran 2024/2025</b></p><br>

                        <ol type="A">
                            <li><b>Ketentuan Umum</b></li>
                            <ol type="1" style="padding-top: 20px ">
                                <li>Dilarang membawa NARKOTIKA dan OBAT-OBATAN TERLARANG</li>
                                <li>Dilarang MENCURI dan mengambil barang tanpa IZIN pemiliknya</li>
                                <li>Dilarang Bermesraan dan melakukan hal-hal mesum</li>
                                <li>Dilarang membuang Sampah dan lainnya lewat jendela</li>
                                <li>Dilarang memakirkan kendaraan disekitaran gedung Asrama</li>
                                <li>Dilarang keluar dari perkarangan Asrama dengan pakaian yang kurang sopan</li>
                                <li>Dilarang meletakkan Ember, Sepatu, dan Menumpukkan sampah didepan kamar</li>
                                <li>Dilarang membuang sampah keselokan</li>
                                <li>Dilarang RASISME</li>
                                <li>Menjemur pakaian sesuai adat dan norma-norma yang berlaku</li>
                                <li>Menjaga kebersihan lingkungan Asrama</li>
                                <li>Selalu menghormati, menjaga martabat, dan nama baik Asrama</li>
                                <li>Selalu menjaga tali silaturahmi antar sesama Penghuni Asrama</li>
                                <li>Wajib mengikuti setiap Acara dan Kegiatan Asrama</li>
                                <li>Wajib menaati segala peraturan yang berlaku</li>
                            </ol>
                        </ol>
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
