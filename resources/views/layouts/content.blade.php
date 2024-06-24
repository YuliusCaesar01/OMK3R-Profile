<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Information') }}
        </h2>
    </x-slot>
    
    <div class="py-5 px-1 mx-auto max-w-screen-xl">
        <a href="{{ route('createinformation') }}">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</button>
        </a>
    </div>

    @php
    // Query untuk mengambil data pengguna menggunakan Eloquent ORM
    $information = \App\Models\Information::orderBy('tanggal_buat', 'desc')->get();
    @endphp

    <div class="py-5 px-1 mx-auto max-w-screen-xl space-y-4">
        @foreach ($information as $i)
        <article class="p-6 bg-white rounded-lg shadow-md border border-gray-200">
            <h2 class="mb-4 text-3xl tracking-tighter font-bold text-gray-900">{{ $i->judul }}</h2>
            <div class="text-gray-500 text-base">
                {{ $i->tanggal_buat->format('Y-m-d')}}
            </div>
            <p class="my-4 font-light">{{ $i->info }}</p>
        
            <div class="flex space-x-2">
                <a href="{{ route('editinformation', $i->id) }}">
                    <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Update</button>
                </a>
                <form action="{{ route('deleteinformation', $i->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this information?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                </form>
            </div>
        </article>
        @endforeach
    </div>
</x-app-layout>
