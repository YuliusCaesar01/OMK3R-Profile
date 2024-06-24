<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Information') }}
        </h2>
    </x-slot>
    
    <div class="py-5 px-1 mx-auto max-w-screen-xl">
    <a href="#">
        <button type="button" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</button>
    </a>
    </div>

    @php
    // Query untuk mengambil data pengguna menggunakan Eloquent ORM
    $information = \App\Models\Information::orderBy('tanggal_buat', 'desc')->get();
    @endphp

    @foreach ($information as $i )
    <article class="py-16 px-1 mx-auto max-w-screen-xl lg:py-15 border-b gray-500">
        <a href="/information/{{ $i->id }}" class="hover:underline">
            <h2 class="mb text-3xl tracking-tighter font-bold text-gray-900">{{ $i->judul }}</h2>
        </a>
        <a href="#">
            <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Update</button>
        </a>
        <a href="#">
            <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
        </a>
        <div class="text-gray 500 text-base">
            {{ $i->tanggal_buat }}
        </div>
        <p class="my-4 font-light">{{ $i->info }}</p>
        <a href="#" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
    </article>
    @endforeach
</x-app-layout>
