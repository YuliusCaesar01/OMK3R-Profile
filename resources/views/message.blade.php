<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Message') }}
        </h2>
    </x-slot>
    

    @php
    // Query untuk mengambil data pengguna menggunakan Eloquent ORM
    $message = \App\Models\message::orderBy('id', 'desc')->get();
    @endphp

    <div class="py-5 px-1 mx-auto max-w-screen-xl space-y-4">
        @foreach ($message as $m)
        <article class="p-6 bg-white rounded-lg shadow-md border border-gray-200">
            <h2 class="mb-4 text-3xl tracking-tighter font-bold text-gray-900">{{ $m->nama }}</h2>
            <div class="text-gray-500 text-base">
                {{ $m->no_wa}}
            </div>
            <p class="my-4 font-light">{{ $m->pesan }}</p>
        </article>
        @endforeach
    </div>
</x-app-layout>
