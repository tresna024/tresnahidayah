@extends('layout.admin')

@section('main')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Galeri</h5>
                            <button type="button" class="btn btn-primary mb-3" style="margin-left: 85%"
                                data-bs-toggle="modal" data-bs-target="#basicModal"><i class="ri-add-line"></i>Tambah
                                Berita</button>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>
                                            <b>Judul</b>
                                        </th>
                                        <th>Gambar</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>9958</td>
                                        <td>Curicó</td>
                                        <td>2005/02/11</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                    <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#basicModal">Edit</button>
                                                    <button class="dropdown-item" href="#">Delete</button>
                                                </div>
                                            </div>
                                        </td><!-- End Notification Icon -->
                                    </tr>

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->


                            <!-- modal tambah -->
                            <div class="modal fade" id="basicModal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Galeri</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Floating Labels Form -->
                                            <form class="row g-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="floatingName"
                                                            placeholder="Judul">
                                                        <label for="floatingName">Judul Galeri</label>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label for="inputNanme4" class="form-label">Masukkan Gambar</label>
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                                                        <label for="floatingTextarea">Keterangan</label>
                                                    </div>
                                                </div>
                                            </form><!-- End floating Labels Form -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Basic Modal-->

                            <!-- modal edit -->
                            <div class="modal fade" id="basicModal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Galeri</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Floating Labels Form -->
                                            <form class="row g-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="floatingName"
                                                            placeholder="Judul">
                                                        <label for="floatingName">Judul Galeri</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputNanme4" class="form-label">Masukkan Gambar</label>
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                                
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                                                        <label for="floatingTextarea">Isi Berita</label>
                                                    </div>
                                                </div>

                                            </form><!-- End floating Labels Form -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Basic Modal-->


    </main><!-- End #main -->
@endsection
