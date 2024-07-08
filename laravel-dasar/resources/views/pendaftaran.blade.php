@extends ('layout.main1')
<style>
    .pendaftaran{
        font-family: 'Times New Roman', Times, serif;
    }

    .isi p {
        text-transform: uppercase;
    }

    .isi a:visited  {
        color: black;
    }

    .isi a:hover {
        color: rgb(253, 159, 9);
    }

    .text p {
        font-size: 15px
    }

    .view-all a:visited{
        color: black;
    }

    .view-all a:hover{
        color: rgb(253, 159, 9);
    }

    .text li p a:visited{
        color: blue;
    }
</style>

@section('atas')
    <div class="container">
        <div class="pendaftaran" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-8">
                    <p style="font-size: 15px">Beranda > {{ $title }}</p>
                    <hr>
                    <h2><b>Pendaftaran</b></h2>
                    <div class="text" style="padding-top: 20px;">
                        <p style="font-size: 15px;"><b>Ketentuan Pembayaran : </b></p>
                        <ol>
                            <li>
                                <p>Bagi mahasiswa yang telah melakukan pembayaran uang muka dan mengajukan pembatalan maksimal 14 hari dan tanggal pembayaran, maka uang muka dapat di kembalikan dan dikenai biaya pembatala 10%, dan apabila melewati 14 hari maka uang muka tidak dapat di kembalikan.</p>
                            </li>
                        </ol>
                        <p style="font-size: 15px;"><b>Prosedur Pembayaran : </b></p>
                        <ol>
                            <li>
                                <p>Foto Copy Kartu Keluarga (KK)</p>
                            </li>
                            <li>
                                <p>Foto Kopi Ijazah</p>
                            </li>
                            <li>
                                <p>Pas Foto 3 X 2</p>
                            </li>
                            <li>
                                <p>Bagi Mahasiswa yang telah lengkap persyaratan dapat mendaftar, <a href="https://forms.gle/GMabeAtXD3wbgoPx6" target="_blank"><u>klik disini</u></a></p>
                            </li>
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
