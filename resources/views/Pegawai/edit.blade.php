@extends('master2')
@section('JudulHalaman', 'Data Pegawai')
@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>

    <a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
            <div class="form-group row">
                <label for="nama" class="col-sm-1 col-form-label mr-2">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-1 col-form-label mr-2">Jabatan</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                        value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-sm-1 col-form-label mr-2">Umur</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-1 col-form-label mr-2">Alamat</label>
                <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" value="">{{ $p->pegawai_alamat }}
                    </textarea>
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach

@endsection
