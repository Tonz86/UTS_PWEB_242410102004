<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        
        $kamarKos = [
            [
                'nama' => 'Kamar Standar A1',
                'harga' => 800000,
                'fasilitas' => 'Kasur, Lemari, Meja',
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Kamar Plus B1',
                'harga' => 1200000,
                'fasilitas' => 'Kasur, Lemari, Meja, AC',
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Kamar Deluxe C1',
                'harga' => 1500000,
                'fasilitas' => 'Kasur, Lemari, Meja, AC, K.Mandi Dalam',
                'status' => 'Terisi'
            ],
            [
                'nama' => 'Kamar Standar A2',
                'harga' => 800000,
                'fasilitas' => 'Kasur, Lemari, Meja',
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Kamar Plus B2',
                'harga' => 1200000,
                'fasilitas' => 'Kasur, Lemari, Meja, AC',
                'status' => 'Terisi'
            ]
        ];

        return view('pengelolaan', compact('kamarKos', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }
}