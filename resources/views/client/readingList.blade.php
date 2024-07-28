@extends('partials.main')

@section('content')
    <div class=" mx-80 gap-6 flex flex-col">
        <a class="flex flex-row gap-2 items-center cursor-pointer">
            <i class="fa-solid fa-chevron-left text-blackSec"></i>
            <p class="font-base text-blackSec text-sm">Back</p>
        </a>
        <div class="flex flex-col gap-12">
            <h1 class="font-base font-bold text-3xl text-black">Reading List of [username]</h1>
            <div class="flex flex-col">
                <div class="blogs py-8 h-64 rounded-xl border-border flex flex-row gap-12">
                    <img class="w-64 h-full object-cover rounded-lg" src="{{ asset('assets/img/typing.jpg') }}" alt="">
                    <div class="flex flex-col gap-4 b w-full justify-between">
                        <div class="flex flex-row items-center justify-between">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                                <p class="font-base text-blackSec text-[12px] ">Writer Name</p>
                            </div>
                            <div class="flex flex-row-reverse gap-2 ">
                                <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-green-200">Self Development</p>
                                <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-blue-200">Best</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            <h1 class="font-base font-bold text-2xl text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                            <p class="font-base text-blackSec text-sm">Description Blog | Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tenetur accusantium.</p>
                        </div>
                        <div class="flex flex-row items-center justify-between">
                            <div class="flex flex-row gap-6">
                                <p class="font-base text-[12px] text-blackSec">01 Aug, 2024</p>
                                <div class="flex flex-row gap-1">
                                    <i class="fa-solid fa-hands-clapping text-blackSec/60"></i>
                                    <p class="font-base text-[12px] text-blackSec">100</p>
                                </div>
                                <div class="flex flex-row gap-1">
                                    <i class="fa-solid fa-comment text-blackSec/60"></i>
                                    <p class="font-base text-[12px] text-blackSec">100</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-bookmark fa-lg text-blackSec/60"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="blogs py-8 h-64 rounded-xl border-border flex flex-row gap-12">
                    <img class="w-64 h-full object-cover rounded-lg" src="{{ asset('assets/img/typing.jpg') }}" alt="">
                    <div class="flex flex-col gap-4 b w-full justify-between">
                        <div class="flex flex-row items-center justify-between">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                                <p class="font-base text-blackSec text-[12px] ">Writer Name</p>
                            </div>
                            <div class="flex flex-row-reverse gap-2 ">
                                <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-green-200">Self Development</p>
                                <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-blue-200">Best</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            <h1 class="font-base font-bold text-2xl text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                            <p class="font-base text-blackSec text-sm">Description Blog | Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tenetur accusantium.</p>
                        </div>
                        <div class="flex flex-row items-center justify-between">
                            <div class="flex flex-row gap-6">
                                <p class="font-base text-[12px] text-blackSec">01 Aug, 2024</p>
                                <div class="flex flex-row gap-1">
                                    <i class="fa-solid fa-hands-clapping text-blackSec/60"></i>
                                    <p class="font-base text-[12px] text-blackSec">100</p>
                                </div>
                                <div class="flex flex-row gap-1">
                                    <i class="fa-solid fa-comment text-blackSec/60"></i>
                                    <p class="font-base text-[12px] text-blackSec">100</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-bookmark fa-lg text-blackSec/60"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection