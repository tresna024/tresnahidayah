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
                    <h5>Beranda > {{ $title }}</h5>
                    <hr>
                    <h2><b>Sejarah</b></h2>
                    <img src="style/img/gedung_asrama.jpg" alt="img_sejarah" height="350px">
                    <div class="text" style="padding-top: 20px; text-align: justify">
                        <p>Nama PNL Residence mulai digunakan secara informal untuk menyebut pengelola asrama pada tahun
                            2008. Pada saat itu pengelolaan asrama diserahkan oleh Direktorat Kemahasiswaan kepada Program
                            Studi Magister Manajemen (Prodi MM) Fakultas Ekonomika dan Bisnis. Penyerahan pengelolaan kepada
                            Prodi MM ini dengan mempertimbangkan keberhasilan Prodi MM dalam mengembangkan Wisma MM sebagai
                            hunian mahasiswa dengan kualitas baik dan mendukung tridharma perguruan tinggi. Selanjutnya
                            serah terima ini dikukuhkan dengan terbitnya Surat Keputusan Rektor Politeknik Negeri
                            Lhokseumawe Nomor 250/P/SK/HT/2008 tentang Penyerahan Pengelolaan Manajemen Asrama Mahasiswa di
                            Lingkungan Politeknik Negeri Lhokseumawe kepada Fakultas Ekonomika dan Bisnis Politeknik Negeri
                            Lhokseumawe. Setelah melalui rangkaian proses perbaikan pengelolaan pada tanggal 7 Mei 2009
                            Prodi MM menyerahkan kembali pengelolaan asrama kepada Direktorat Kemahasiswaan. <br>
                            Nama PNL Residence secara resmi muncul dalam Peraturan Rektor Politeknik Negeri Lhokseumawe
                            Nomor 1/P/SK/HT/2015 tentang Kedudukan, Fungsi, dan Tugas Organisasi di Lingkungan Politeknik
                            Negeri Lhokseumawe. Dalam peraturan ini PNL Residence menjadi salah satu unsur penunjang yang
                            berada di bawah koordinasi Wakil Rektor Bidang Kerja Sama dan Alumni dengan tugas mengelola
                            asrama, Grha Sabha Pramana (GSP) dan Taman Kearifan (selanjutnya disebut dengan Wisdom Park).
                            Peraturan Rektor Nomor 10 Tahun 2023 tentang Organisasi dan Tata Kerja Politeknik Negeri
                            Lhokseumawe Kembali menetapkan bahwa dalam melaksanakan tugas, PNL Residence menyelenggarakan
                            fungsi pelayanan hunian asrama bagi mahasiswa di UGM dan fasilitas pendukungnya berupa Gedung
                            Grha Sabha Pramana dan Wisdom Park dalam rangka mendukung kegiatan tridharma. Selanjutnya pada
                            tahun 2024 PNL Residence menerima penugasan sebagai pengelola rumah susun dosen dan tenaga
                            kependidikan Kinanti 4. <br>
                            Dengan penugasan di atas PNL Residence berkembang menjadi university housing yang menyediakan
                            wahana pembelajaran dan hunian dengan fasilitas pendukung berupa fasilitas olahraga, taman,
                            logistik air minum, serta ruang pertemuan baik indoor maupun outdoor. Selain itu PNL Residence
                            juga melaksanakan tugas mendukung tridharma dengan membangun ekosistem yang mampu mendukung
                            mahasiswa UGM menjadi SDM unggul dan berkarakter.</p>
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
