<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Bioskop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center p-4 bg-gray-900">
    <div class="fixed inset-0 overflow-hidden">
        <img src="{{ asset('images/background.jpg') }}" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
    </div>
    <div class="w-full max-w-md mx-auto">
        <div class="bg-white/90 backdrop-blur-md rounded-2xl shadow-2xl overflow-hidden">
            <div class="bg-gray-800 py-6 px-8 text-center ">
                <h1 class="text-2xl font-bold text-white">Rebahan Cinema</h1>
                <p class="text-blue-100/90 mt-1">Selamat datang! Silahkan Login Terlebih dahulu</p>
            </div>
            <div class="p-8">
                <form action="{{ route('login.submit') }}" method="POST" class="space-y-6">
                @csrf
                    <div class="space-y-1">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Username</label>
                        <div class="relative rounded-md shadow-sm">
                            <input type="text" name="username"
                                class="block w-full px-4 py-2.5 rounded-md border border-gray-300 placeholder-gray-400"
                                placeholder="Masukan Username Anda">
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="relative rounded-md shadow-sm">
                            <input type="password" name="password"
                                class="block w-full px-4 py-2.5 rounded-md border border-gray-300 placeholder-gray-400"
                                placeholder="Masukan Password Anda">
                        </div>
                    </div>
                    <div class="pt-2">
                        <button type="submit" 
                        class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-md 
                        shadow-sm text-sm font-medium text-white bg-gray-700 hover:bg-gray-800">Masuk</button>
                    </div>
                </form>
            </div>
            <div class="bg-gray-50/50 px-8 py-4 text-center border-t border-gray-200/50">
                <p class="text-xs text-gray-500">
                    &copy; 2025 Rebahan Cinema. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</body>
</body>
</html>