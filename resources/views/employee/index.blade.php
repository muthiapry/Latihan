@extends('layout.main')

@section('title', 'Daftar Pegawai')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h2 class="mx-auto">Daftar Pegawai</h2>

                <a href="/employee/create" class="btn btn-primary my-3">Tambah Data Pegawai</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Unit Kerja</th>
                            <th scope="col">Aksi</th>
                        <tr>
                    </thead>
                    <tbody>
                        @foreach( $employee as $emp )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $emp->nama }}</td>
                                <td>{{ $emp->NIP }}</td>
                                <td>{{ $emp->email }}</td>
                                <td>{{ $emp->unit_kerja }}</td>
                                <td>
                                    <a href="/employee/{{ $emp->id }}" class="btn btn-outline-info">detail</a>
                                    <a href="/employee/{{ $emp->id }}/edit" class="btn btn-outline-success">edit</a>
                                    <form action="/employee/{{ $emp->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger">hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection