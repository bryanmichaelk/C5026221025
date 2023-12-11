@extends('master2')
@section('JudulHalaman', 'Mahasiswa')
@section('konten')
    <h3>Edit Data Mahasiswa</h3>

    <a href="/mahasiswa" class="btn btn-info"> Kembali</a>
    <br />

    @foreach ($mahasiswa as $m)
        <form action="/mahasiswa/update" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nrp" class="col-2 col-form-label mr-2">NRP</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="NRP" name="nrp" value="{{ $m->NRP }}"
                        readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-2 col-form-label mr-2">Nama</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="Nama" name="nama" value="{{ $m->Nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jurusan" class="col-2 col-form-label mr-2">Jurusan</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="Jurusan" name="jurusan" value="{{ $m->Jurusan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="ipk" class="col-2 col-form-label mr-2">IPK</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="IPK" name="ipk" value="{{ $m->IPK }}">
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach

@endsection
