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


    @php
    // Query untuk mengambil data pengguna menggunakan Eloquent ORM
    $information = \App\Models\Information::orderBy('tanggal_buat', 'desc')->get();
     @endphp

<div class="py-5 px-1 mx-auto max-w-screen-xl space-y-4">
    @foreach ($information as $i )
        <article class="p-6 bg-white rounded-lg shadow-md border border-gray-200">
            <a href="/information/{{ $i->id }}" class="hover:underline">
                <h2 class="mb text-3xl tracking-tighter font-bold text-gray-900">{{ $i->judul }}</h2>
           </a>
    <div class="text-gray 500 text-base" >
        {{ $i->tanggal_buat->format('Y-m-d')}}
    </div>
    <p class="my-4 font-light">{{ $i->info }}</p>
    <a href="/information/{{ $i->id }}" class="font-medium text-blue-500 hover:underline"> Read More &raquo;</a>
    </article>

    @endforeach
</div>
</body>
<x-footer> </x-footer>
</html>
