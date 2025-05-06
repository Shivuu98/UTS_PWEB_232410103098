@extends('layouts.app')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Selamat datang!</h1>
    <p class="text-gray-600">Apa yang ingin Anda tonton hari ini?</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($movies as $movie)
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
        <div class="bg-gray-800 py-2 px-4">
            <h3 class="text-white font-bold text-lg">{{ $movie['title'] }}</h3>
        </div>
        <div class="p-4">
            <div class="h-48 bg-gray-200 flex items-center justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                </svg>
            </div>
            <div class="flex justify-between items-center mb-2">
                <span class="text-gray-600">Jam Tayang:</span>
                <span class="font-semibold">{{ $movie['time'] }}</span>
            </div>
            <div class="flex justify-between items-center mb-4">
                <span class="text-gray-600">Harga:</span>
                <span class="font-semibold">Rp. {{ ($movie['price'] ) }}</span>
            </div>
            <button class="w-full bg-gray-600 hover:bg-gray-800 text-white py-2 px-4 rounded transition duration-200">
                Pesan Tiket
            </button>
        </div>
    </div>
    @endforeach
</div>
@endsection
