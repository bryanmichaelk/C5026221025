@extends('master2')
@section('JudulHalaman', 'Baju')
@section('konten')
    <h3>Data Baju</h3>

    <a href="/baju" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/baju/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="merkBaju" class="col-2 col-form-label mr-2">Merk</label>
            <div class="col-8">
                <input type="text" class="form-control" id="merkbaju" name="merkBaju">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockBaju" class="col-2 col-form-label mr-2">Stock</label>
            <div class="col-8">
                <input type="number" class="form-control" id="stockbaju" name="stockBaju">
            </div>
        </div>
        <input type="submit" value="Simpan Baju" class="btn btn-primary">
    </form>
@endsection
