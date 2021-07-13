@extends('layout.main')

@section('title', 'Daftar Pegawai')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h2 class="mx-auto">Rincian Data Pegawai</h2>

                <form method="post" action="/employee">
                    @csrf
                    <div class="form-group my-2">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name ="nama" 
                        placeholder="Masukkan Nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name ="nip" 
                        placeholder="Masukkan NIP" value="{{ old('nip') }}">
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name ="email" 
                        placeholder="Masukkan Email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="unit_kerja">Unit Kerja</label>
                        <input type="text" class="form-control @error('unit_kerja') is-invalid @enderror" id="unit_kerja" name ="unit_kerja" 
                        placeholder="Masukkan Unit Kerja" value="{{ old('unit_kerja') }}">
                        @error('unit_kerja')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-success my-2">Submit</button>
                    <a href="/employee" class="btn btn-primary">Back</a>
                    
                </form>
            </div>
        </div>
    </div>
@endsection