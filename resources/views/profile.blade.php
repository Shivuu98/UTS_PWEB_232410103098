@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row gap-8">
    <div class="w-full md:w-1/3">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex flex-col items-center">
                <div class="h-24 w-24 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-gray-800">{{ $username }}</h2>
            </div>

            <div class="mt-6 border-t border-gray-200 pt-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Informasi Akun</h3>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Member sejak</span>
                        <span class="font-medium">01-01-2025</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Total pemesanan</span>
                        <span class="font-medium">8</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Film favorit</span>
                        <span class="font-medium">Avengers: Endgame</span>
                    </div>
                </div>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="mt-6 w-full bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded">
                    Log Out
                </button>
            </form>
        </div>
    </div>

    <div class="w-full md:w-2/3">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Membership</h2>

            <div class="space-y-4">
                <div class="border-b border-gray-200 pb-4">
                    <img src="{{ asset('images/member.png') }}" class="w-full h-auto rounded">
                </div>
            </div>

            <a href="/pengelolaan" 
                class="mt-6 inline-block w-full text-center bg-blue-600 
                hover:bg-blue-700 text-white py-2 px-4">Lihat Semua Riwayat
            </a>
        </div>
    </div>
</div>
@endsection
