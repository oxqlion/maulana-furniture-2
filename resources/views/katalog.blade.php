@extends('layouts.header')

@section('content')
    <body class="pt-28">
        <div class="flex flex-col h-fit container">
            <div class="px-4 mb-3">
                <div class="flex items-center space-x-2 text-gray-400 text-sm">
                    <a href="{{ route('home') }}" class="hover:underline hover:text-gray-600">Home</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <a href="{{ route('katalog') }}" class="hover:underline hover:text-gray-600">Katalog</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span>Detail Produk</span>
                </div>
            </div>
            <div class="flex flex-1 gap-8">
                <div class="hidden md:block w-1/5 w-1/5 p-4 font-montserrat">
                    <div class="text-start font-bold">KATEGORI PRODUK</div>
                    <div class="border-b-4 border-[#DDBD7E] mt-2 w-10"></div>
                    <div class="text-start mt-6 gab-2">
                        <div class="mt-1">Kursi</div>
                        <div class="border-b border-gray-400 mt-1 w-44"></div>
                        <div class="mt-1">Lampu tidur</div>
                        <div class="border-b border-gray-400 mt-1 w-44"></div>
                        <div class="mt-1">Set kamar tidur</div>
                        <div class="border-b border-gray-400 mt-1 w-44"></div>
                        <div class="mt-1">Meja kayu</div>
                        <div class="border-b border-gray-400 mt-1 w-44"></div>
                        <div class="mt-1">Gazebo taman</div>
                        <div class="border-b border-gray-400 mt-1 w-44"></div>
                        <div class="mt-1">Kamar tidur</div>
                        <div class="border-b border-gray-400 mt-1 w-44"></div>
                    </div>
                </div>
                <div class="p-4 w-full">
                    <div class="flex justify-between mb-12">
                        <p class="text-2xl font-bold font-montserrat text-[#434240]">Sofa Tempat Tidur</p>
                        <p class="text-sm font-light font-montserrat text-slate-700">Showing 25 result</p>
                    </div>
                    <div class="flex flex-wrap gap-8 justify-center sm:justify-between md:justify-start">
                        <?php for ($i = 0; $i < 15; $i++): ?>
                        <x-card_katalog></x-card_katalog>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
