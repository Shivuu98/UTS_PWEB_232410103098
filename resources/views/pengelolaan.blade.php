@extends('layouts.app')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Pengelolaan Tiket</h1>
    <p class="text-gray-600">Daftar semua pemesanan tiket</p>
</div>

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-600 text-left text-xs font-semibold text-white uppercase tracking-wider">No</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-600 text-left text-xs font-semibold text-white uppercase tracking-wider">Film</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-600 text-left text-xs font-semibold text-white uppercase tracking-wider">Kursi</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-600 text-left text-xs font-semibold text-white uppercase tracking-wider">Harga</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-600 text-left text-xs font-semibold text-white uppercase tracking-wider">Waktu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($riwayat as $history)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        {{ $history['id'] }}
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        {{ $history['movie'] }}
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        {{ $history['seat'] }}
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        {{ $history['price'] }}
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        {{ $history['date'] }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection