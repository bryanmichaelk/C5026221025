@extends('master2')
@section('JudulHalaman', 'Baju')
@section('konten')
    <h3>Data Baju</h3>
    <a href="/baju" class="btn btn-info"> Kembali</a>

    <br />
    <div class="container shadow p-3 mt-2">
        <div class="row">
            <div class="col-6">
                <img src="" alt="">
            </div>
            <div class="col-6">
                @foreach ($baju as $b)
                    {{ csrf_field() }}
                    <div class="py-2 row">
                        <div class="col-sm-3 font-weight-bold ">Kode</div>
                        <div class="col-sm-9">: {{ $b->kodebaju }}</div>
                    </div>
                    <div class="py-2 row">
                        <div class="col-sm-3 font-weight-bold ">Merk</div>
                        <div class="col-sm-9">: {{ $b->merkbaju }}</div>
                    </div>
                    <div class="py-2 row">
                        <div class="col-sm-3 font-weight-bold ">Stock</div>
                        <div class="col-sm-9">: {{ $b->stockbaju }}</div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <a href="/baju" class="btn btn-primary w-25 ">OK</a>
                    </div>

            </div>
            @endforeach
        </div>

    </div>

@endsection
