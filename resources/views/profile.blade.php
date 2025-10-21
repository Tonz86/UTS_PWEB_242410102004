@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
    <h2 class="mb-4">Profile Kos</h2>
    <p class="lead">Selamat datang, <strong>{{ $username }}</strong>!</p>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">Informasi Kos</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td><strong>Nama Kos</strong></td>
                            <td>Kos Putra Makmur</td>
                        </tr>
                        <tr>
                            <td><strong>Pemilik</strong></td>
                            <td>Mr. Halim</td>
                        </tr>
                        <tr>
                            <td><strong>Alamat</strong></td>
                            <td>Jl. Halmahera No. 1, Jember</td>
                        </tr>
                        <tr>
                            <td><strong>Telepon</strong></td>
                            <td>0812-3456-7890</td>
                        </tr>
                        <tr>
                            <td><strong>Total Kamar</strong></td>
                            <td>10 Kamar</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Fasilitas</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li>WiFi Kecepatan Tinggi</li>
                        <li>Area Parkir Luas</li>
                        <li>Dapur Bersama</li>
                        <li>Keamanan 24 Jam</li>
                    </ul>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">Peraturan</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Dilarang membawa tamu terlalu sering dan terlalu malam!</li>
                        <li>Jaga kebersihan</li>
                        <li>Bila ada maling, kita hajar lalu kita polisikan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection