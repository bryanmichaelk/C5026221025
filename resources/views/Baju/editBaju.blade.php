@extends('master2')
@section('JudulHalaman', 'Baju')
@section('konten')
    <h3>Edit Baju</h3>

    <a href="/baju" class="btn btn-info"> Kembali</a>
    <br />

    @foreach ($baju as $b)
        <form action="/baju/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="kodeBaju" value="{{ $b->kodebaju }}"> <br />
            <div class="form-group row">
                <label for="merkBaju" class="col-2 col-form-label mr-2">Merk</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="merkbaju" name="merkBaju" value="{{ $b->merkbaju }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="stockBaju" class="col-2 col-form-label mr-2">Stock</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="stockbaju" name="stockBaju" value="{{ $b->stockbaju }}">
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach

@endsection
