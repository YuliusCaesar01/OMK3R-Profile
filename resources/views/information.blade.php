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

<article class="py-16 px-1 mx-auto max-w-screen-xl  lg:py-20 border-b gray-500">
    <h2 class="mb-1 text-3xl tracking-tighter font-bold text-gray-900">Judul Informasi</h2>
    <div class="text-gray 500 text-base" >
    1 Januari 2024
    </div>
    <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo rerum commodi adipisci omnis ratione doloribus
         dolor provident laborum quia nemo cumque placeat, temporibus, dicta at minus esse molestiae minima. Unde.</p>
    <a href="#" class="font-medium text-blue-500 hover:underline"> Read More &raquo;</a>
</article>







</body>
<x-footer> </x-footer>
</html>
