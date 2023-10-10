@extends('layout.header')
@section('title', 'Pemain King Barca')
@section('content')
    <h1 class="px-16 mt-8 mb-8 text-bold font-weight-bold text-[30px]">Pemain MU Kalahan</h1>
<div class="relative overflow-x-auto px-16">
    <table class="w-full text-sm text-left text-gray-500 dark:text-white p-8">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID Pemain
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Pemain
                </th>
                <th scope="col" class="px-6 py-3">
                    Nomor Punggung
                </th>
                <th scope="col" class="px-6 py-3">
                    Posisi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemain as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">{{ $item->id }}</td>
                <td class="px-6 py-4">{{ $item->nama_pemain }}</td>
                <td class="px-6 py-4">{{ $item->no_punggung }}</td>
                <td class="px-6 py-4">{{ $item->posisi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
