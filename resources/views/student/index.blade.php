@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">

            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <a href="/students/create" class="btn btn-primary my-3">Tambah Data</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <ul class="list-group">

                @foreach ($student as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <a href="/students/{{$student->id}}" class="badge badge-info">detail</a>
                </li>

                <!-- <table class="table">
                    <tr>
                        <thead class="thead-dark">
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </thead>
                    </tr>

                    <tbody>

                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$student->nama}}</td>
                            <td>{{$student->nim}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->jurusan}}</td>
                            <td>

                                <a href="/students/{{$student->id}}/edit" class="btn btn-primary">Edit</a>

                                <form action="/students/{{$student->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>

                            </td>
                        </tr>

                    </tbody>
                </table> -->
                @endforeach

            </ul>

        </div>
    </div>
</div>
@endsection