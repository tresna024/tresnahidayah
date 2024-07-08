@extends('layout.admin')

@section('main')
    @include('sweetalert::alert')
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
                            <h5 class="card-title">Tambah Berita</h5>
                            <button type="button" class="btn btn-primary mb-3" style="margin-left: 85%"
                                data-bs-toggle="modal" data-bs-target="#TambahBerita"><i class="ri-add-line"></i>Tambah
                                Berita</button>

                            <!-- modal tambah -->
                            <div class="modal fade" id="TambahBerita" tabindex="-1" role="dialog"
                                aria-labelledby="tambahBeritaLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Berita</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Floating Labels Form -->
                                            <form class="row g-3" action="{{ route('simpan_berita') }}"
                                                enctype="multipart/form-data" method="POST">
                                                @csrf
                                                <div class="col-md-12">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="judul"
                                                            name="judul" placeholder="Judul">
                                                        <label for="floatingName">Judul Berita</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="slug"
                                                            name="slug" placeholder="Judul">
                                                        <label for="floatingName">Slug</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder="Isi Berita" id="isi" name="isi" style="height: 100px;"></textarea>
                                                        <label for="floatingTextarea">Isi Berita</label>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label for="inputNanme4" class="form-label">Masukkan Gambar</label>
                                                    <input class="form-control" type="file" id="gambar"
                                                        name="gambar">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form><!-- End floating Labels Form -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Basic Modal-->

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>
                                            <b>Judul</b>
                                        </th>
                                        <th>Isi Berita</th>
                                        <th>Gambar</th>
                                        <th>Slug</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Tanggal Posting</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($berita as $key => $br)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $br->judul }}</td>
                                            <td>{{ $br->isi }}</td>
                                            <td>
                                                @if ($br->gambar)
                                                    <img src="{{ asset('storage/' . $br->gambar) }}" width="100">
                                                @endif
                                            </td>
                                            <td>{{ $br->slug }}</td>
                                            <td>{{ $br->created_at->format('d-m-Y') }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="cardOpt3"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                        <a href="{{ route('edit_berita', $br->id) }}">
                                                            <button type="button" class="dropdown-item">Edit</button>
                                                        </a>
                                                        <button type="button" class="dropdown-item delete"
                                                            data-id="{{ $br->id }}">Hapus</button>


                                                    </div>
                                                </div>
                                            </td><!-- End Notification Icon -->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
    </main><!-- End #main -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete').forEach(button => {
                button.addEventListener('click', function() {
                    var id = this.getAttribute('data-id');
                    var title = 'Delete News!';
                    var text = "Are you sure you want to delete this news?";

                    Swal.fire({
                        title: title,
                        text: text,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            fetch(`/admin/hapus_berita/${id}`, {
                                    method: 'DELETE',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    }
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        Swal.fire(
                                            'Deleted!',
                                            'The news has been deleted.',
                                            'success'
                                        ).then(() => {
                                            location.reload();
                                        });
                                    } else {
                                        Swal.fire(
                                            'Error!',
                                            'There was an error deleting the news.',
                                            'error'
                                        );
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    Swal.fire(
                                        'Error!',
                                        'There was an error deleting the news.',
                                        'error'
                                    );
                                });
                        }
                    });
                });
            });
        });
    </script>
@endsection
