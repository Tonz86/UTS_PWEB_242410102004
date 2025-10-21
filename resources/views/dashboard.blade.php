@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">Dashboard</h2>
    <p class="lead">Selamat datang, <strong>{{ $username }}</strong>!</p>
    
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5>Total Kamar</h5>
                    <h2>10</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5>Terisi</h5>
                    <h2>4</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5>Tersedia</h5>
                    <h2>6</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <h5>Pendapatan</h5>
                    <h2>10jt</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Tentang Kos Putra Makmur</h5>
                </div>
                <div class="card-body">
                    <p>Kos Putra Makmur adalah tempat hunian yang angker dan tempatnya orang senang di Jember.</p>
                    <h6>Fasilitas:</h6>
                    <ul>
                        <li>WiFi Cepat</li>
                        <li>Parkir Luas</li>
                        <li>Dapur Bersama</li>
                        <li>Keamanan 24 Jam</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Pengumuman</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        <strong>Pembayaran</strong>
                        <p class="mb-0 small">Jatuh tempo 1 November 2025</p>
                    </div>
                    <div class="alert alert-warning">
                        <strong>Pemeliharaan</strong>
                        <p class="mb-0 small">WiFi 20 Oktober 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection