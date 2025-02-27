@extends('layout.main')

@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class=" app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">User</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data User</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <table class="table table-bordered text-center shadow-sm">
                    <thead class="table-light">
                        <tr>
                            <th>Nama </th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                            <th>Usia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Andi</td>
                            <td>Jakarta Selatan</td>
                            <td>Web Designer</td>
                            <td>21</td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>Bandung</td>
                            <td>Web Developer</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>Cahyo</td>
                            <td>Bekasi</td>
                            <td>Web Programmer</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td>Darma</td>
                            <td>Bali</td>
                            <td>Teknisi</td>
                            <td>35</td>
                        </tr>
                    </tbody>
                </table>
    
            </div>
        </div>
    </main>
@endsection
