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

    @foreach ($information as $i )
        
    
<article class="py-16 px-1 mx-auto max-w-screen-xl  lg:py-15 border-b gray-500">
    <a href="/information/{{ $i->id }}" class="hover:underline">
    <h2 class="mb text-3xl tracking-tighter font-bold text-gray-900">{{ $i->judul }}</h2>
    </a>
    <div class="text-gray 500 text-base" >
        {{ $i->tanggal_buat}}
    </div>
    <p class="my-4 font-light">{{ $i->info }}</p>
    <a href="/information/{id}" class="font-medium text-blue-500 hover:underline"> Read More &raquo;</a>
</article>

@endforeach

</body>
<x-footer> </x-footer>
</html>
