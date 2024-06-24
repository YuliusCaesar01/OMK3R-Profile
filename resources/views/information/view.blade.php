<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Information Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="mb text-3xl tracking-tighter font-bold text-gray-900">{{ $information->judul }}</h2>
                    <div class="text-gray-500 text-base">
                        {{ $information->tanggal_buat }}
                    </div>
                    <p class="my-4 font-light">{{ $information->info }}</p>
                    <a href="#" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>