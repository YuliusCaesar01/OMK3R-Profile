<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update Information') }}
        </h2>
    </x-slot>

    <div class="py-5 px-1 mx-auto max-w-screen-xl">
        <form action="{{ route('updateinformation', $information->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                <input type="text" id="judul" name="judul" value="{{ $information->judul }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
            </div>
            <div class="mb-5">
                <label for="tanggal_buat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Buat</label>
                <input type="date" id="tanggal_buat" name="tanggal_buat" value="{{ $information->tanggal_buat }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
            </div>
            <div class="mb-5">
                <label for="info" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Info</label>
                <input type="text" id="info" name="info" value="{{ $information->info }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
            </div>
            <div class="mb-5">
                <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" value="{{ $information->tanggal }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
            </div>
            <div class="flex justify-center items-center">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Information</button>
            </div>
        </form>
    </div>
</x-app-layout>
