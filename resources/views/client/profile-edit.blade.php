@extends('partials.main')

@section('content')
    <div class=" mx-80 gap-6 flex flex-col">
        <a class="flex flex-row gap-2 items-center cursor-pointer">
            <i class="fa-solid fa-chevron-left text-blackSec"></i>
            <p class="font-base text-blackSec text-sm">Back</p>
        </a>
        <div class="flex flex-col gap-12">
            <h1 class="font-base font-bold text-2xl text-black">Change Profile</h1>
            <div class="flex flex-row justify-between gap-8">
                <div class="flex flex-col w-1/2 gap-4">
                    <div class="flex flex-row items-center gap-2 border-2 border-dashed border-blackSec/50 py-5 h-full rounded-lg justify-center cursor-pointer">
                        <i class="fa-regular fa-file-image text-blackSec/50"></i>
                        <p class="font-base text-blackSec/50">[Image here]</p>
                    </div>
                    <div class="image flex flex-col gap-1">
                        <label class="font-base text-center font-medium border py-2 px-4 text-blackSec rounded-lg border-border outline-none" for="selectImage">Choose Image</label>
                        <input class="hidden border py-2 px-4 text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none" type="file" name="selectImage" id="selectImage">
                    </div>
                </div>
                <div class="flex flex-col gap-4 w-1/2">
                    <div class="username flex flex-col gap-1">
                        <label class="font-base text-black text-[14px] font-medium" for="username">Username</label>
                        <input class="border py-2 px-4 text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none @error('username') border-red-500 @enderror" type="text" name="username" id="username" placeholder="Enter your username" value="{{ old('username') }}">
                        @error('username')
                        <div class="flex flex-row gap-2">
                            <img class="w-4" src="{{ asset('assets/icons/error.png') }}" alt="">
                            <p class="text-[12px] font-medium text-red-500">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="email flex flex-col gap-1">
                        <label class="font-base text-black text-[14px] font-medium" for="email">Email</label>
                        <input class="border py-2 px-4 text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none @error('email') border-red-500 @enderror" type="text" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')
                        <div class="flex flex-row gap-2">
                            <img class="w-4" src="{{ asset('assets/icons/error.png') }}" alt="">
                            <p class="text-[12px] font-medium text-red-500">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="phone_number flex flex-col gap-1">
                        <label class="font-base text-black text-[14px] font-medium" for="phone_number">Phone number</label>
                        <input class="border py-2 px-4 text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none @error('phone_number') border-red-500 @enderror" type="text" name="phone_number" id="phone_number" placeholder="Enter your phone number" value="{{ old('phone_number') }}">
                        @error('phone_number')
                        <div class="flex flex-row gap-2">
                            <img class="w-4" src="{{ asset('assets/icons/error.png') }}" alt="">
                            <p class="text-[12px] font-medium text-red-500">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300 text-white py-2 rounded-lg transition" id="cta" type="submit" disabled>Register</button>
                        
                </div>
            </div>
            
        </div>
    </div>
@endsection