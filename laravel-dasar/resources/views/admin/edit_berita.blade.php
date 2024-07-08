@extends ('layout.admin')

@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Berita</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Berita</li>
                    <li class="breadcrumb-item active">Edit Berita</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Edit Berita</h5>

                            <!-- Floating Labels Form -->
                            <form class="row g-3" action="{{ route('update', $beritum->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="judul" name="judul"
                                            placeholder="Judul" value="{{ $beritum->judul }}" required>
                                        <label>Judul</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="isi" name="isi"
                                            placeholder="Isi Berita"  value="{{ $beritum->isi }}" required>
                                        <label>Isi Berita</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="slug" name="slug"
                                            placeholder="Slug Berita"  value="{{ $beritum->slug }}">
                                        <label>Slug Berita</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="gambar" name="gambar">
                                        @if ($beritum->gambar)
                                            <img src="{{ asset('storage/' . $beritum->gambar) }}" width="100"
                                                style="margin-top: 10px;">
                                        @endif
                                    </div>
                                </div>
                                <div class="text">
                                    <a href="{{ route('berita') }}">
                                        <button type="button" class="btn btn-danger"><i class="ri-arrow-go-back-line"></i>
                                            Kembali</button>
                                    </a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End floating Labels Form -->

                        </div>
                    </div>

                </div>

            </div>
        </section>


    </main><!-- End #main -->
@endsection
