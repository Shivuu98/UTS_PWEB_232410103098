<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function dashboard()
    {
        $movies = [
            [
                'id' => 1,
                'title' => 'Avengers: Endgame',
                'time' => '10.00',
                'price' => 35000,
                'image' => 'https://id.pinterest.com/pin/155303888149085020/'
            ],
            [
                'id' => 2,
                'title' => 'Thunderbolts*',
                'time' => '12.00',
                'price' => 35000
            ],
            [
                'id' => 3,
                'title' => 'Spiderman: No Way Home',
                'time' => '12.00',
                'price' => 35000
            ],
            [
                'id' => 4,
                'title' => 'Marvel Fantastic Four',
                'time' => '14.00',
                'price' => 35000
            ]
        ];
        return view('dashboard', compact('movies') );


    }
    public function pengelolaan()
    {
        $riwayat = [
            [
                'id' => 1,
                'movie' => 'Parbik Gula Uncut',
                'seat' => 'A12',
                'price' => 'Rp 35.000',
                'date' => '14.00 01-02-2025'
            ],
            [
                'id' => 2,
                'movie' => 'Jumbo',
                'seat' => 'C08',
                'price' => 'Rp 35.000',
                'date' => '20.00 12-02-2025'
            ],
            [
                'id' => 3,
                'movie' => 'Thunderbolts*',
                'seat' => 'B10',
                'price' => 'Rp 35.000',
                'date' => '09.00 22-02-2025'
            ],
            [
                'id' => 4,
                'movie' => 'Interstellar',
                'seat' => 'A05',
                'price' => 'Rp 35.000',
                'date' => '12.00 01-03-2025'
            ],
            [
                'id' => 5,
                'movie' => 'The Batman',
                'seat' => 'E13',
                'price' => 'Rp 35.000',
                'date' => '14.00 27-03-2025'
            ],
        ];
        return view('pengelolaan', compact('riwayat'));
    }
    public function profile()
    {
        return view('profile');
    }
}