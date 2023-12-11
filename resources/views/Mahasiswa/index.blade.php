@extends('master2')
@section('JudulHalaman', 'Mahasiswa')
@section('konten')
    <h3 class="my-3">Data Mahasiswa</h3>

    {{-- <form action="/baju/cari" method="GET" class="mt-3">
        <div class="form-group row">
            <div class="col-sm-5"><input class= "form-control" type="text" name="cari" placeholder="Cari Baju.."
                    value="{{ old('cari', isset($cari) ? $cari : '') }}"></div>

            <div class="col-sm-5"><input class = "btn btn-info" type="submit" value="CARI"></div>

        </div>
    </form>
    <br /> --}}


    <table class="table table-striped table-hover">
        <tr>
            <th class="text-center" style="width: 10%;">NRP</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Jurusan</th>
            <th class="text-center" style="width: 10%">IPK</th>
            <th class="text-center" style="width: 30%">Action</th>
        </tr>
        @foreach ($mahasiswa as $m)
            <tr>
                <td class="text-center">{{ $m->NRP }}</td>
                <td>{{ $m->Nama }}</td>
                <td class="text-center">{{ $m->Jurusan }}</td>
                <td class="text-center">{{ $m->IPK }}</td>
                {{-- @if ($b->tersedia == 'Y')
                    <td class="bg-success text-center">{{ $b->tersedia }}</td>
                @else
                    <td class="bg-danger text-center">{{ $b->tersedia }}</td>
                @endif --}}

                <td class="text-center">
                    <a href="/mahasiswa/view/{{ $m->NRP }}" class="btn btn-success">View</a>
                    |
                    <a href="/mahasiswa/edit/{{ $m->NRP }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
