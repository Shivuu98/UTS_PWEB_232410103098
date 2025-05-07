<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login' );
    }

    public function auth(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    
        // Redirect dengan username sebagai query parameter
        return redirect()->route('dashboard', ['username' => $request->username]);
    }

    public function logout()
    {
        return redirect()->route('login.form');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        $movies = [
            [
                'id' => 1,
                'title' => 'Avengers: Endgame',
                'time' => '10.00',
                'price' => 35000,
                'image' => 'endgame.jpeg'
            ],
            [
                'id' => 2,
                'title' => 'Thunderbolts*',
                'time' => '12.00',
                'price' => 35000,
                'image' => 'thunderbolts.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Spiderman: NWH',
                'time' => '12.00',
                'price' => 35000,
                'image' => 'spiderman.webp'
            ],
            [
                'id' => 4,
                'title' => 'Marvel Fantastic Four',
                'time' => '14.00',
                'price' => 35000,
                'image' => 'marvel-ff.jpg'
            ],
            [
                'id' => 5,
                'title' => 'Black Panther 2',
                'time' => '16.00',
                'price' => 35000,
                'image' => 'black-panther.webp'
            ]
        ];
        return view('dashboard', compact('movies', 'username') );


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
            [
                'id' => 6,
                'movie' => 'Black Panther 2',
                'seat' => 'D08',
                'price' => 'Rp 35.000',
                'date' => '20.00 29-03-2025'
            ],
            [
                'id' => 7,
                'movie' => 'Komang',
                'seat' => 'E07',
                'price' => 'Rp 35.000',
                'date' => '14.00 07-04-2025'
            ],
            [
                'id' => 8,
                'movie' => 'Avengers: Endgame',
                'seat' => 'F11',
                'price' => 'Rp 35.000',
                'date' => '20.00 10-04-2025'
            ],
        ];
        return view('pengelolaan', compact('riwayat'));
    }
    public function profile(Request $request)
    {
        $username = $request->query('username');

        return view('profile', compact('username'));
    }
}