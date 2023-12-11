@extends('master2')
@section('JudulHalaman', 'Mahasiswa')
@section('konten')
    <h3>Data Mahasiswa</h3>
    <a href="/mahasiswa" class="btn btn-info"> Kembali</a>

    <br />
    <div class="container shadow p-3 mt-2 card" style="width:40%;">
        <div class="row">
            <div class="col-12">
                @foreach ($mahasiswa as $m)
                    {{ csrf_field() }}
                    <div class="py-2 row pl-4">
                        <div class="col-sm-4 font-weight-bold ">NRP</div>
                        <div class="col-sm-8">: {{ $m->NRP }}</div>
                    </div>
                    <div class="py-2 row pl-4">
                        <div class="col-sm-4 font-weight-bold ">Nama</div>
                        <div class="col-sm-8">: {{ $m->Nama }}</div>
                    </div>
                    <div class="py-2 row pl-4">
                        <div class="col-sm-4 font-weight-bold ">Jurusan</div>
                        <div class="col-sm-8">: {{ $m->Jurusan }}</div>
                    </div>
                    <div class="py-2 row pl-4">
                        <div class="col-sm-4 font-weight-bold ">IPK</div>
                        <div class="col-sm-8">: {{ $m->IPK }}</div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <a href="/mahasiswa" class="btn btn-primary w-25 ">OK</a>
                    </div>

            </div>
            @endforeach
        </div>

    </div>

@endsection
