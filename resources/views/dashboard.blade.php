@extends('layouts.app')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Selamat datang {{ $username }}!</h1>
    <p class="text-gray-600">Apa yang ingin Anda tonton hari ini?</p>
</div>

<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
    @foreach($movies as $movie)
    <div class="bg-white rounded-lg shadow-md overflow-hidden w-full">
        <!-- Gambar Poster -->
        <div class="w-full">
            <img src="{{ asset('images/' . $movie['image']) }}" alt="{{ $movie['title'] }}" class="w-full h-[360px] object-cover">
        </div>

        <!-- Info Film -->
        <div class="p-4 mb-5">
            <h3 class="text-lg font-bold text-gray-800 mb-5">{{ $movie['title'] }}</h3>
            <div class="flex justify-between text-sm text-gray-600 mb-1">
                <span>Jam Tayang:</span>
                <span class="font-medium text-black">{{ $movie['time'] }}</span>
            </div>
            <div class="flex justify-between text-sm text-gray-600 mb-4">
                <span>Harga:</span>
                <span class="font-medium text-black">Rp. {{ $movie['price'] }}</span>
            </div>
            <button class="w-full bg-gray-700 hover:bg-gray-900 text-white py-2 px-4 rounded transition duration-200">
                Pesan Tiket
            </button>
        </div>
    </div>
    @endforeach
</div>
@endsection
