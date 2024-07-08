@extends ('layout.main1')
<style>
    .contac-us {
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

    .email,
    .ig a {
        text-decoration: underline;
        color: rgb(0, 217, 255);
        cursor: pointer;
    }

    .send button {
        padding: 12px 32px;
        background: #073C64;
        border: none;
        outline: none;
        border-radius: 6px;
        box-shadow: 0 0 10px #073C64;
        font-size: 16px;
        color: #ededed;
        letter-spacing: 1px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 20px;
        transition: .5s;
    }

    .send button:hover {
        box-shadow: none;
    }
</style>

@section('atas')
    <div class="container">
        <div class="contac-us" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-8">
                    <p style="font-size: 15px">Beranda > {{ $title }}</p>
                    <hr>
                    <h2><b>Hubungi Kami</b></h2>
                    <hr>
                    <p style="font-size: 15px">Selamat Datang di <b>Asrama Politeknik Negeri Lhokseumawe</b>, Apabila ada
                        Sesuatu yang ingin di tanyakan silahkan hubungi kami :
                    </p>
                    <div class="hubungi">
                        <ul style="list-style: none;">
                            <li>No Telp : +62-823-6048-7115</li>
                            <li>Email : <span class="email">asramapoltek@gmail.com</span></li>
                            <li>Instagram : <span class="ig"><a
                                        href="https://www.instagram.com/ikpas.pnl?igsh=MTVxOGptaWwzN3l4bw=="
                                        target="_blank">ikpas.pnl</a></span></li>
                        </ul>
                    </div>
                    <h4><b>Lokasi Kami</b></h4>
                    <div class="peta">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.9137966822814!2d97.15415232474176!3d5.117593394859474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304783c272a5aec3%3A0xd1770d240c33f3ba!2sAsrama%20Mahasiswa%20PNL!5e0!3m2!1sid!2sid!4v1718993447461!5m2!1sid!2sid"
                            width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="komentar mt-4">
                        <h4><b>Saran Dan Komentar</b></h4>
                        <hr>
                        <small>Alamat email tidak akan di publikasi</small>
                        <form action="">
                            <div class="form-group mt-4">
                                <textarea class="form-control" id="message" rows="5" cols="10" placeholder="Komentar"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control item" id="name" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control item" id="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <div class="send">
                                <button type="submit">Send Message</button>
                            </div>

                        </form>
                    </div>
                </div>

                {{-- bagian text samping --}}
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
