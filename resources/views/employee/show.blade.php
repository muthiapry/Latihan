@extends('layout.main')

@section('title', 'Daftar Pegawai')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h2 class="mx-auto">Rincian Data Pegawai</h2>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $employee->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $employee->nip }}</h6>
                        <p class="card-text">{{ $employee->email }}</p>
                        <p class="card-text">{{ $employee->unit_kerja }}</p>
            
                        <a href="/employee" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection