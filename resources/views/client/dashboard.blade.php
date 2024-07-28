@extends('partials.main')

@section('content')
<div class="flex flex-row mx-40">
    <div class="content-right w-9/12 mr-8 flex flex-col items-center">
        @foreach ($blogs as $blog)
            <div class="blogs py-8 px-12 h-64 border-border flex flex-row gap-12 w-full">
                {{-- <img class="w-64 h-full object-cover rounded-lg hidden" src="{{ asset('storage/' . $blog->image) }}" alt=""> --}}
                <div class="flex flex-col gap-4 b w-full justify-between ">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                            <p class="font-base text-blackSec text-[12px] ">{{ $blog->user->username }}</p>
                        </div>
                        <div class="flex flex-row-reverse gap-2 ">
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[12px] border border-border">{{ $blog->category->name }}</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <a href="/blogs/{{ $blog->id }}" class="font-base font-bold text-2xl text-black">{{ $blog->title }}</a>
                        <a class="font-base text-blackSec text-sm">{{ $blog->description }}</a>
                    </div>
                    <div class="flex flex-row items-center justify-end">
                        
                        <i class="fa-regular fa-bookmark fa-lg text-blackSec/60"></i>
                    </div>
                </div>
            </div>
        @endforeach
        
        
        <button class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300 text-white py-2 px-4 mt-4 rounded-lg transition cursor-pointer" type="button">See more</button>          
    </div>
    <div id="container-left" class="content-left border-l border-border w-3/12">
        <div id="content-left" class="flex flex-col gap-8 pl-8 pt-8 w-80">
            <h1 class="font-base font-semibold text-blackSec">Reading List</h1>
                <div class="flex flex-col gap-3">
                    @foreach ($recommendBlogs as $blog)
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                                <p class="font-base font-medium text-black text-[12px] ">{{ $blog->user->username }}</p>
                            </div>
                            <a href="/blogs/{{ $blog->id }}" class="font-base font-bold text-black">{{ $blog->title }}</a>
                            <p class="font-base text-[12px] text-blackSec">{{ $blog->published_at }}</p>
                        </div>           
                    @endforeach
                </div>
            <div class="category flex flex-col gap-4">
                <h1 class="font-base font-semibold text-blackSec">Topics</h1>
                <div class="flex flex-row gap-2 flex-wrap">
                    @foreach ($categories as $category)
                        <p class="py-1 px-4 rounded-full font-base text-blackSec text-[12px] font-medium border border-border">{{ $category->name }}</p>
                    @endforeach
                </div>
            </div>

            {{------------------------------ READING LIST ------------------------------}}
            
            {{-- <div class="category flex flex-col gap-4">
                <h1 class="font-base font-semibold text-blackSec">Reading List</h1>
                <div class="flex flex-col gap-3">
                    @foreach ($favorities as $favorite)
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                                <p class="font-base font-medium text-black text-[12px] ">{{ $favorite->user->username }}</p>
                            </div>
                            <h1 class="font-base font-bold text-black">{{ $favorite->blog->title }}</h1>
                            <p class="font-base text-[12px] text-blackSec">{{ $favorite->blog->published_at }}</p>
                        </div>           
                    @endforeach
                </div>
            </div> --}}
        </div>
    </div>
</div>
@include('partials.footer')
    

<script src="{{ asset('assets/js/sidebarScroll.js') }}"></script>
@endsection