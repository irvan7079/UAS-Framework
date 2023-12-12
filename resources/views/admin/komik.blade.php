@extends('layouts.admin')

@section('content')
    @include('components.navadmin')
    <div class="w-full h-full flex">
        <div class="w-full flex flex-col bg-[#588d24]">
            <div class="h-auto m-4 p-8 bg-white rounded-lg drop-shadow-md">
                <p class="text-4xl font-bold mb-4 text-[#588d24]">Daftar Komik</p>
                <hr><br>
                <form action="/admin/komik/searchkomik" class="form-inline" method="GET">
                    <input type="search" name="searchkomik" class="px-2 w-[300px] py-2 bg-gray-900 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-green-500 text-white" placeholder="Masukkan Judul Komik">
                        <button type="submit" class="px-2 py-2 bg-green-700 hover:bg-green-600 rounded-md text text-white font-semibold duration-300">Cari Komik</button>
                </form>
                <div class="w-full h-auto flex justify-end gap-6">
                    <a href="{{ route('admin.download_excel') }}">
                        <button class="px-4 py-2 bg-green-700 hover:bg-green-600 rounded-md text text-white font-semibold duration-300">Download Excel</a></button>
                    </a>
                    <a href="{{ route('admin.addkomik') }}">
                        <button class="px-4 py-2 bg-green-700 hover:bg-green-600 rounded-md text text-white font-semibold duration-300">Tambah Komik</button>
                    </a>
                </div><br>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-[#588d24] uppercase bg-gray-300">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Komik
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Genre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Rating
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($komik as $index => $kmk)
                                <tr class="bg-white border-b hover:bg-green-500 text-black hover:text-white font-medium duration-200">
                                    <th scope="row" class="px-6 py-4 whitespace-nowrap">
                                        {{ ++$index }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $kmk->nama }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $kmk->genre }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $kmk->rating }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="w-full h-auto flex justify-around">
                                            <a href="{{ route('admin.edit', $kmk->id) }}">
                                                <button
                                                    class="px-4 py-2 bg-green-700 rounded-md text-white hover:bg-green-600 font-semibold duration-300">Edit</button>
                                            </a>
                                            <form action="{{ route('admin.delete', $kmk->id) }}" method="post">
                                                @csrf
                                                <button
                                                class="px-4 py-2 bg-red-700 rounded-md text-white hover:bg-red-600 font-semibold duration-300" onclick = "return confirm('Apakah anda yakin ingin menghapus komik {{ $kmk->nama }} ?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@include('components.footeradmin')
@endsection
