@extends('layouts.admin')

@section('content')
    @include('components.navadmin')
    <div class="w-full h-full flex">
        <div class="w-full flex flex-col bg-green-950">
            <div class="w-auto h-auto m-4 p-8 bg-[#588d24] rounded-lg drop-shadow-md self-center">
                <p class="text-3xl font-bold mb-4 text-white text-center">Tambah Komik Baru</p>
                <hr><br>
                <form action="{{ route('admin.add') }}" method="post" class="w-full flex flex-col items-center" enctype="multipart/form-data">
                    @csrf
                    <div class="h-auto flex flex-col gap-2 text-white">
                        <div class="flex flex-row">
                            <p class="w-[120px]">Nama Komik</p>
                            <p class="w-[20px]">:</p>
                            <input type="text" name="nama" id=""
                                class="w-[500px] px-2 text-white bg-gray-800 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-green-500">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[120px]">Genre</p>
                            <p class="w-[20px]">:</p>
                            <input type="text" name="genre" id=""
                                class="w-[500px] px-2 text-white bg-gray-800 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-green-500">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[120px]">Rating</p>
                            <p class="w-[20px]">:</p>
                            <input type="text" name="rating" id=""
                                class="w-[500px] px-2 text-white bg-gray-800 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-green-500">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[120px]">Sampul Komik</p>
                            <p class="w-[20px]">:</p>
                            <input type="file" name="image_path" id="" class="text-green-500 cursor-pointer">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[120px]">PDF Komik</p>
                            <p class="w-[20px]">:</p>
                            <input type="file" name="pdf_path" id="" class="text-green-500 cursor-pointer">
                        </div>
                    </div>
                    <button type="submit"
                        class="w-[200px] h-auto py-4 mt-16 text-white font-medium bg-green-600 rounded-md flex justify-center items-center hover:bg-green-400 duration-200">Submit</button>
                </form>
            </div>
        </div>
    </div>
@include('components.footeradmin')
@endsection
