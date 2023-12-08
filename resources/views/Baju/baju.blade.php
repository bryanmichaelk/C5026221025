@extends('master2')
@section('JudulHalaman', 'Baju')
@section('konten')
    <h3>Data Baju</h3>

    <a href="/baju/tambah" class="btn btn-primary"> + Tambah Baju Baru</a>

    <br />
    <form action="/baju/cari" method="GET" class="mt-3">
        <div class="form-group row">
            <div class="col-sm-5"><input class= "form-control" type="text" name="cari" placeholder="Cari Baju.."
                    value="{{ old('cari', isset($cari) ? $cari : '') }}"></div>

            <div class="col-sm-5"><input class = "btn btn-info" type="submit" value="CARI"></div>

        </div>
    </form>
    <br />


    <table class="table table-striped table-hover">
        <tr>
            <th class="text-center" style="width: 10%;">Kode</th>
            <th class="text-center">Merk</th>
            <th class="text-center">Stock</th>
            <th class="text-center" style="width: 10%">Tersedia</th>
            <th class="text-center" style="width: 30%">Action</th>
        </tr>
        @foreach ($baju as $b)
            <tr>
                <td class="text-center">{{ $b->kodebaju }}</td>
                <td>{{ $b->merkbaju }}</td>
                <td class="text-center">{{ $b->stockbaju }}</td>
                @if ($b->tersedia == 'Y')
                    <td class="bg-success text-center">{{ $b->tersedia }}</td>
                @else
                    <td class="bg-danger text-center">{{ $b->tersedia }}</td>
                @endif

                <td class="text-center">
                    <a href="/baju/view/{{ $b->kodebaju }}" class="btn btn-success">View</a>
                    |
                    <a href="/baju/edit/{{ $b->kodebaju }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/baju/hapus/{{ $b->kodebaju }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $baju->links() }}
@endsection
