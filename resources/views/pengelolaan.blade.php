@extends('layouts.app')

@section('title', 'Pengelolaan Kamar')

@section('content')
<div class="container">
    <h2 class="mb-4">Pengelolaan Kamar Kos</h2>
    
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Daftar Kamar</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kamar</th>
                        <th>Harga/Bulan</th>
                        <th>Fasilitas</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kamarKos as $index => $kamar)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $kamar['nama'] }}</td>
                        <td>Rp {{ number_format($kamar['harga'], 0, ',', '.') }}</td>
                        <td>{{ $kamar['fasilitas'] }}</td>
                        <td>
                            @if($kamar['status'] == 'Tersedia')
                                <span class="badge bg-success">{{ $kamar['status'] }}</span>
                            @else
                                <span class="badge bg-danger">{{ $kamar['status'] }}</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection