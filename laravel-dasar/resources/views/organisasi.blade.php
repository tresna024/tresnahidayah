@extends ('layout.main1')
<style>
    .organisasi {
        font-family: 'Times New Roman', Times, serif;
    }

    .ketum img,
    .wakil img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    hr {}

    .isi-samping p {
        text-transform: uppercase;
    }

    a:visited {
        color: black
    }

    a:hover {
        color: rgb(24, 24, 74)
    }

    .ikpas td {
        font-size: 17px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 10px;
        text-align: left;
    }
</style>

@section('atas')
    <div class="container">
        <div class="organisasi" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-8">
                    <h5>Beranda > {{ $title }}</h5>
                    <hr>
                    <h2><b>Struktur Organisasi</b></h2>
                    {{-- bagian foto --}}
                    <div class="ketum">
                        <img src="style/img/gambar_direktur.png" alt="img_sejarah" height="300px">
                        <p style="text-align: center; padding-top: 10px; font-size: 25px"><b>Manajer Utama Asrama PNL</b></p>
                        <p style="text-align: center; font-size: 20px;"><b>Khairil Fata</b></p>
                    </div>
                    <svg width="100%" height="30" style="margin-top: 20px">
                        <rect width="100%" height="40" style="fill:rgb(174, 172, 172);"></rect>
                    </svg>

                    <div class="wakil">
                        <img src="style/img/gambar_wakil.png" alt="img_sejarah" height="300px">
                        <p style="text-align: center; padding-top: 10px; font-size: 25px"><b>Wakil Manajer Asrama PNL</b>
                        </p>
                        <p style="text-align: center; font-size: 20px;"><b>Ibnu Khaldun</b></p>
                    </div>
                    <svg width="100%" height="30" style="margin-top: 20px">
                        <rect width="100%" height="40" style="fill:rgb(174, 172, 172);"></rect>
                    </svg>

                    <div class="ikpas">
                        <h4 style="text-align: center; padding-top: 10px;"><b>Struktur Kepengurusan</b></h4>
                        <p style="text-align: center; font-size: 20px;">IKPAS (Ikatan Penghuni Asrama)</p>

                        <table>
                            <tr>
                                <td>Ketua Umum</td>
                                <td>M. Agil Saputra</td>
                            </tr>
                            <tr>
                                <td>Wakil Ketua Umum</td>
                                <td>Fajar Permadi</td>
                            </tr>
                            <tr>
                                <td>Sekretaris</td>
                                <td>Rifqa</td>
                            </tr>
                            <tr>
                                <td>Bendahara</td>
                                <td>Suci Victoria Ibrahim</td>
                            </tr>
                            <tr>
                                <td>Bidang Kesehatan</td>
                                <td>Nur Fadillah Zulfi</td>
                            </tr>
                            <tr>
                                <td>Bidang Kerohanian</td>
                                <td>Diki Gusrianto</td>
                            </tr>
                            <tr>
                                <td>Bidang Seni & Olahraga</td>
                                <td>Lutfi Syahru Ramadhan</td>
                            </tr>
                            <tr>
                                <td>Bidang Keamanan</td>
                                <td>Abyan Al farizi</td>
                            </tr>
                            <tr>
                                <td>Bidang Informasi & Komunikasi</td>
                                <td>Jhona Simanjuntak</td>
                            </tr>
                        </table>
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
