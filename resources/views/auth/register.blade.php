<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    {{-- @if (session()->has('success'))
    <div class="border p-4 w-5/12 rounded-xl absolute left-1/2 top-12 -translate-x-1/2 bg-white items-center flex flex-row justify-between" id="flash">
        <div class="flex flex-row gap-5">
            <img class="h-8" src="{{ asset('assets/img/logo.png') }}" alt="">
            <div class="flex flex-col">
                <p class="font-base text-black font-medium">Registration Successfully</p>
                <p class="text-xs font-base text-blackSec">Welcome, you have become part of the creatizens</p>
            </div>
        </div>
        <p class="text-xl font-base mr-4 text-blackSec" id="countdown">5</p>
    </div>
@endif --}}
    <form action="/register" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex gap-4 justify-center">
            <div class="flex flex-initial w-5/12 gap-12 flex-col items-center mt-8">
                <img class="w-8" src="{{ asset('assets/img/logo.png') }}" alt="">
                <div class="content-hero flex flex-col w-96 gap-6">
                    <div class="hero-title flex flex-col gap-3">
                        <h1 class="text-black font-bold text-4xl font-base text-center">Welcome Creatizens!</h1>
                        <p class="text-blackSec font-base text-center">It's time and place for your thoughts <br> to be recognized by the world</p>
                    </div>
                    <div class="flex flex-col gap-4">
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
                            <input class="border py-2 px-4 text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none @error('email') border-red-500 @enderror" type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
                            @error('email')
                            <div class="flex flex-row gap-2">
                                <img class="w-4" src="{{ asset('assets/icons/error.png') }}" alt="">
                                <p class="text-[12px] font-medium text-red-500">{{ $message }}</p>
                            </div>
                            @enderror
                        </div>
                        <div class="phone_number flex flex-col gap-1">
                            <label class="font-base text-black text-[14px] font-medium" for="phone_number">Phone</label>
                            <input class="border py-2 px-4 text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none @error('phone_number') border-red-500 @enderror" type="text" name="phone_number" id="phone_number" placeholder="Enter your phone number" value="{{ old('phone_number') }}">
                            @error('phone_number')
                            <div class="flex flex-row gap-2">
                                <img class="w-4" src="{{ asset('assets/icons/error.png') }}" alt="">
                                <p class="text-[12px] font-medium text-red-500">{{ $message }}</p>
                            </div>
                            @enderror
                        </div>
                        <div class="password flex flex-col gap-1 items-start">
                            <label class="font-base text-black text-[14px] font-medium" for="password">Password</label>
                            <input class="border py-2 px-4 w-full text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none @error('password') border-red-500 @enderror" type="password" name="password" id="password" placeholder="Enter your password" value="{{ old('password') }}">
                            @error('password')
                            <div class="flex flex-row gap-2">
                                <img class="w-4" src="{{ asset('assets/icons/error.png') }}" alt="">
                                <p class="text-[12px] font-medium text-red-500">{{ $message }}</p>
                            </div>
                            @enderror
                            <div class="flex flex-row items-start gap-2 mt-1">
                                <input class="w-6 h-6" type="checkbox" name="policy" id="policy" onclick="isChecked()">
                                <label class="text-blackSec text-sm" id="policy" for="policy" >Creating an account means you agree with our Terms of Service Privacy Policy</label>
                            </div>
                        </div>
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300 text-white py-2 rounded-lg transition" id="cta" type="submit" disabled>Register</button>
                    <div class="flex flex-row gap-1 font-base text-sm -mt-2">
                        <p class="text-black">Already have an account?</p>
                        <a class="text-blackSec underline underline-offset-2" href="/login">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('assets/js/register.js') }}"></script>
    <script src="{{ asset('assets/js/flash.js') }}"></script>
</body>
</html>

