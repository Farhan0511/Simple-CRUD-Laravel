@extends('layout.main')

@section('program')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Form Input Program</h2>
        <form>
            <div class="mb-3">
                <label for="namaProgram" class="form-label">Nama Program</label>
                <input type="text" class="form-control" id="namaProgram" placeholder="Masukkan nama program">
            </div>

            <div class="mb-3">
                <label for="jenisBantuan" class="form-label">Jenis Bantuan Program</label>
                <select class="form-select" id="jenisBantuan">
                    <option selected disabled>Pilih jenis bantuan</option>
                    <option value="uang">Bantuan Uang</option>
                    <option value="sembako">Bantuan Sembako</option>
                    <option value="alat">Bantuan Alat</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Program</label>
                <input type="date" class="form-control" id="tanggal">
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Upload Gambar</label>
                <input class="form-control" type="file" id="gambar" accept="image/*">
            </div>

            <button type="button" class="btn btn-primary" id="btnSimpan">Simpan</button>
        </form>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('btnSimpan').addEventListener('click', function() {
                Swal.fire({
                    title: "Data Berhasil Disimpan!",
                    icon: "success",
                    confirmButtonText: "OK"
                });
            });
        });
    </script>
@endsection
