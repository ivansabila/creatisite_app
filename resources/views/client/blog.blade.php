@extends('partials.main')

@section('content')
<div class=" mx-80 gap-6 flex flex-col">
        <a class="flex flex-row gap-2 items-center cursor-pointer" href="/">
            <i class="fa-solid fa-chevron-left text-blackSec"></i>
            <p class="font-base text-blackSec text-sm">Back</p>
        </a>
        <div class="flex flex-col gap-4">
            <h1 class="font-base font-bold text-3xl text-black">{{ $blog->title }}</h1>
            <div class="flex flex-row items-center gap-4">
                <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-green-200 w-fit">{{ $blog->category->name }}</p>
                <p class="font-base text-[12px] text-blackSec">{{ $blog->created_at }}</p>
            </div>
            <p class="font-base text-blackSec text-sm">{{ $blog->description }}</p>
            <p class="font-base text-blackSec text-sm">{{ $blog->body }}</p>
        </div>
    </div>
@endsection