@extends('master2')
@section('JudulHalaman', 'Data Pegawai')
@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>
    <a href="/pegawai"  class="btn btn-info"> Kembali</a>

    <br />
    <br />
    <div class="container shadow p-3">
        <div class="row">
            <div class="col-6">
                <img src="" alt="">
            </div>
            <div class="col-6">
                @foreach ($pegawai as $p)
                    {{ csrf_field() }}
                    <div class="py-2 row">
                        <div class="col-sm-3 font-weight-bold ">Nama</div>
                        <div class="col-sm-9">: {{ $p->pegawai_nama }}</div>
                    </div>
                    <div class="py-2 row">
                        <div class="col-sm-3 font-weight-bold ">Jabatan</div>
                        <div class="col-sm-9">: {{ $p->pegawai_jabatan }}</div>
                    </div>
                    <div class="py-2 row">
                        <div class="col-sm-3 font-weight-bold ">Umur</div>
                        <div class="col-sm-9">: {{ $p->pegawai_umur }}</div>
                    </div>
                    <div class="py-2 row">
                        <div class="col-sm-3 font-weight-bold ">Alamat</div>
                        <div class="col-sm-9">: {{ $p->pegawai_alamat }}</div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <a href="/pegawai" class="btn btn-primary w-25 ">OK</a>
                    </div>

            </div>
            @endforeach
        </div>

    </div>

@endsection
