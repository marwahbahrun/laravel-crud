@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <table class="table table-striped mt-5">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NPM</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">JURUSAN</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->npm}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td>
                            <a href="" class="badge badge-success mr-3">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
