@extends ('layout.main1')
<style>
    .sejarah {
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
</style>

@section('atas')
    <div class="container">
        <div class="sejarah" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-8">
                    <p style="font-size: 15px">Beranda > {{ $title }}</p>
                    <hr>
                    <h2><b>Kegiatan Gotong Royong mahasiswa Asrama Politeknik Negeri Lhokseumawe</b></h2>
                    <img src="{{ 'style/img/gambar_kegiatan.jpg' }}" alt="img_sejarah" height="350px">
                    <div class="text" style="padding-top: 20px; text-align: justify">
                        <p>Kegiatan gotong royong seperti ini rutin di lakukan pada hari sabtu dan minggu, guna untuk membersihkan halaman Asrama dan menjalin silahturahmi dengan sesama warga asrama. Dengan kita melakukan kegiatan Gotong Royong dapat nilai-nilai kebersamaan, solidaritas, dan saling peduli. Nilai-nilai ini penting dalam kehidupan bermasyarakat dan dapat menjadi modal berharga bagi mahasiswa di masa mendatang. Dalam kegiatan gotong royong juga, mahasiswa dapat belajar bagaimana mengorganisir pekerjaan, memimpin tim, dan membuat keputusan bersama. Ini adalah keterampilan yang sangat berguna di masa depan.</p>
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
@endsection
