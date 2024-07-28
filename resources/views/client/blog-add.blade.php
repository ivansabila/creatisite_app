@extends('partials.main')

@section('content')
<form action="/blogs/store" method="post" enctype="multipart/form-data">
    @csrf
    <div class="content pt-12">
        <div class="flex flex-col gap-12 mx-80">
            <a class="flex flex-row gap-2 items-center cursor-pointer" href="/">
                <i class="fa-solid fa-chevron-left text-blackSec"></i>
                <p class="font-base text-blackSec text-sm">Back</p>
            </a>
            <div class="flex flex-row justify-between">
                <h1 class="font-base font-bold text-3xl text-black">Add blogs</h1>
                <button class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300 text-white py-2 px-8 rounded-lg transition" type="submit" onclick="submitForm()">Upload</button>
            </div>
            <div class="flex flex-col gap-4">
                <div class="body flex flex-col gap-1">
                    <label class="font-base text-black text-[14px] font-medium " for="category">Category</label>
                    <select class="border py-2 px-4 text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none" name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                {{-- <h1 id="titleIn" class="font-base text-3xl font-semibold text-blackSec/50 outline-none" contenteditable="true" onclick="validateTitle()" onblur="validateTitleBlur()" oninput="testTitle(this)" >Title</h1> --}}
                {{-- <p id="descIn" class="font-base text-md text-blackSec/50 outline-none" contenteditable="true" onclick="validateDesc()" onblur="validateDescBlur()" oninput="testDesc(this)" >Description</p> --}}
                {{-- <input class="border hidden" type="text" name="title" id="title"> --}}
                {{-- <input class="border hidden" type="text" name="description" id="description"> --}}
                <div class="flex flex-col">
                    <textarea class="resize-none font-base text-3xl font-semibold text-black outline-none border-0" name="description" id="description" placeholder="Description" required cols="1"></textarea>
                    <textarea class="resize-none font-base text-md text-blackSec outline-none border-0" name="title" id="title" placeholder="Description" required cols="1"></textarea>
                </div>
                <div class="flex flex-col border rounded-lg">
                    <div class="flex flex-row border rounded-t-lg items-center">
                        <p class="font-base pl-4 text-blackSec text-[14px] font-medium">Text format :</p>
                        <button onclick="formatText('bold')" class="text-base w-10 h-10 border-r text-black hover:bg-blue-200 active:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 transition ease-in-out" type="button"><b>B</b></button>
                        <button onclick="formatText('italic')" class="text-base w-10 h-10 border-r text-black hover:bg-blue-200 active:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 transition ease-in-out" type="button"><i>I</i></button>
                        <button onclick="formatText('underline')" class="text-base w-10 h-10 text-black hover:bg-blue-200 active:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 transition ease-in-out" type="button"><u>U</u></button>
                        <button onclick="toggleView()" class="text-base w-10 h-10 text-black hover:bg-blue-200 active:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 transition ease-in-out" type="button">view</button>
                    </div>
                    <div id="editor" contenteditable="true" class="editor p-4 outline-none text-black"></div>
                    <textarea id="body" name="body" class="editor hidden w-full text-black"></textarea>
                </div>
            </div>
           
        </div>
    </div>
    </form>

    <script src="{{ asset ('assets/js/addBlog.js') }}"></script>

@endsection