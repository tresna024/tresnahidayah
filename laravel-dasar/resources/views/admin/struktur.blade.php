@extends ('layout.admin')

@section('main')
@include('sweetalert::alert')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Struktrur Organisasi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Struktur</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">

                <div class="col-xl-10">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Struktur Organisasi</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Struktur Organisasi</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">
                                @foreach ($organisasi as $organisasi)
                                    


                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <div class="manajer" style="text-align: center">
                                            <h5 class="card-title">Manajer Utama Asrama PNL</h5>
                                            <img src="{{ asset('storage/' . $organisasi->img_ketua) }}" alt="manajer_img"
                                                style="width: 150px; height: 150px;">
                                            <p style="font-size: 15px" class="card-title"><b>{{ $organisasi->nama_ketua }}</b></p>
                                        </div>
                                        <div class="manajer" style="text-align: center">
                                            <h5 class="card-title">Ketua Pengurus Asrama PNL</h5>
                                            <img src="{{ asset('storage/' . $organisasi->img_wakil) }}" alt="manajer_img"
                                                style="width: 150px; height: 150px;">
                                            <p style="font-size: 15px" class="card-title"><b>{{ $organisasi->nama_wakil }}</b></p>
                                        </div>


                                        <h5 class="card-title">Anggota IKPAS (Ikatan Penghuni Asrama)</h5>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 label ">Ketua Umum</div>
                                            <div class="col-lg-8 col-md-8">{{ $organisasi->ketua_ikpas }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 label ">Wakil Ketua Umum</div>
                                            <div class="col-lg-8 col-md-8">{{ $organisasi->wakil_ketua }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 label ">Sekretaris</div>
                                            <div class="col-lg-8 col-md-8">{{ $organisasi->sekretaris }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 label">Bendahara</div>
                                            <div class="col-lg-8 col-md-8">{{ $organisasi->bendahara }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 label">Bidang Kesehatan</div>
                                            <div class="col-lg-8 col-md-8">{{ $organisasi->bidang_kesehatan }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 label">Bidang Kerohanian</div>
                                            <div class="col-lg-8 col-md-8">{{ $organisasi->bidang_kerohania }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 label">Bidang Seni & Olahraga</div>
                                            <div class="col-lg-8 col-md-8">{{ $organisasi->bidang_senior }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 label">Bidang Keamanan</div>
                                            <div class="col-lg-8 col-md-8">{{ $organisasi->bidang_keamanan }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 label">Bidang Informasi & Komunikasi</div>
                                            <div class="col-lg-8 col-md-8">{{ $organisasi->bidang_infokom }}</div>
                                        </div>

                                    </div>


                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form action="{{ route('edit_struktur', $organisasi->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Manajer
                                                Utama</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ asset('storage/' . $organisasi->img_ketua) }}" alt="Profile">
                                                <div class="pt-2">
                                                    <input class="form-control" type="file" id="img_ketua"
                                                        name="img_ketua">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Manajer
                                                Utama</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nama_ketua" type="text" class="form-control"
                                                    id="nama_ketua" value="{{ $organisasi->nama_ketua }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Wakil
                                                Manajer</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ asset('storage/' . $organisasi->img_wakil) }}" alt="Profile">
                                                <div class="pt-2">
                                                    <input class="form-control" type="file" id="img_wakil"
                                                        name="img_wakil">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Wakil Manajer
                                                Utama</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nama_wakil" type="text" class="form-control"
                                                    id="nama_wakil" value="{{ $organisasi->nama_wakil }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Ketua Umum
                                                Ikpas</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="ketua_ikpas" type="text" class="form-control"
                                                    id="ketua_ikpas" value="{{ $organisasi->ketua_ikpas }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Wakil Ketua
                                                Umum Ikpas</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="wakil_ketua" type="text" class="form-control"
                                                    id="wakil_ketua" value="{{ $organisasi->wakil_ketua }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName"
                                                class="col-md-4 col-lg-3 col-form-label">Sekretaris</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="sekretaris" type="text" class="form-control"
                                                    id="sekretaris" value="{{ $organisasi->sekretaris }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName"
                                                class="col-md-4 col-lg-3 col-form-label">Bendahara</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="bendahara" type="text" class="form-control"
                                                    id="bendahara" value="{{ $organisasi->bendahara }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Bidang
                                                Kesehatan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="bidang_kesehatan" type="text" class="form-control"
                                                    id="bidang_kesehatan" value="{{ $organisasi->bidang_kesehatan }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Bidang
                                                Kerohanian</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="bidang_kerohania" type="text" class="form-control"
                                                    id="bidang_kerohania" value="{{ $organisasi->bidang_kerohania }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Bidang Seni &
                                                Olahraga</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="bidang_senior" type="text" class="form-control"
                                                    id="bidang_senior" value="{{ $organisasi->bidang_senior }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Bidang
                                                Keamanan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="bidang_keamanan" type="text" class="form-control"
                                                    id="bidang_keamanan" value="{{ $organisasi->bidang_keamanan }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Bidang
                                                Informasi & Komunikasi</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="bidang_infokom" type="text" class="form-control"
                                                    id="bidang_infokom" value="{{ $organisasi->bidang_infokom }}">
                                            </div>
                                        </div>

                                        <div class="text">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>
                                @endforeach

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
