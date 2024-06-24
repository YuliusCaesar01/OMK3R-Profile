<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMK3R</title>
    <link rel="icon" href="{{ asset('favicon.co.jpg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<x-navbar></x-navbar>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="mb text-3xl tracking-tighter font-bold text-gray-900">{{ $information->judul }}</h2>
                    <div class="text-gray-500 text-base">
                        {{ $information->tanggal_buat }}
                    </div>
                    <p class="my-4 font-light">{{ $information->info }}</p>
                    <a href="/information" class="font-medium text-blue-500 hover:underline">&laquo; Back </a>
                </div>
            </div>
        </div>
    </div>

</body>
<x-footer> </x-footer>
</html>
