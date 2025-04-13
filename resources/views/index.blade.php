@extends('layout.main')

@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="m-5 mt-4 app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row: Judul & Breadcrumb-->
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3 class="mb-0">User</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data User</li>
                        </ol>
                    </div>
                </div>

                <!--begin::Row: Tombol-->
                <div class="row mb-3">
                    <div class="col-12 d-flex justify-content-start">
                        <a href="{{ route ('create') }}" class="btn btn-primary">Tambah data</a>
                    </div>
                </div>
            </div>

            <!--begin::Table-->
            <div class="m-2 mt-3">
                <table class="table table-bordered text-center shadow-sm">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($data as $d)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->email }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fas fa-pen me-1" aria-hidden="true"></i> Edit
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <i class="fas fa-trash-alt me-1" aria-hidden="true"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>

    </main>
@endsection
