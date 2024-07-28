<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('assets/icons/logo.png') }}" 
          type="image/x-icon"> 
    <title>{{ $title }} Page | Creatisite</title>
</head>
<body>
    @if (session()->has('success'))
    <div class="border p-4 w-4/12 rounded-xl absolute left-1/2 top-12 -translate-x-1/2 bg-white items-center flex flex-row justify-between" id="flash">
        <div class="flex flex-row gap-5">
            <img class="h-8" src="{{ asset('assets/img/logo.png') }}" alt="">
            <div class="flex flex-col">
                <p class="font-base text-black font-medium">{{ session('success') }}</p>
                <p class="text-xs font-base text-blackSec">Welcome, you have become part of the creatizens</p>
            </div>
        </div>
        <p class="text-xl font-base mr-4 text-blackSec" id="countdown">5</p>
    </div>
@endif
@if (session()->has('loginError'))
    <div class="border p-4 w-4/12 rounded-xl absolute left-1/2 top-12 -translate-x-1/2 bg-white items-center flex flex-row justify-between" id="flash">
        <div class="flex flex-row gap-5">
            <img class="h-8" src="{{ asset('assets/img/logo.png') }}" alt="">
            <div class="flex flex-col">
                <p class="font-base text-black font-medium">{{ session('loginError') }}</p>
                <p class="text-xs font-base text-blackSec">Enter your email and password correctly</p>
            </div>
        </div>
        <p class="text-xl font-base mr-4 text-blackSec" id="countdown">5</p>
    </div>
@endif
    <form action="/login" method="post">
        @csrf
        <div class="flex gap-4 justify-center">
            <div class="flex flex-initial w-5/12 gap-12 flex-col items-center mt-8 ">
                <img class="w-8" src="{{ asset('assets/img/logo.png') }}" alt="">
                <div class="content-hero flex flex-col gap-6 w-96">
                    <div class="hero-title flex flex-col gap-3">
                        <h1 class="text-black font-bold text-4xl font-base text-center">Welcome Back!</h1>
                        <p class="text-blackSec font-base text-center">Get a new stories about new <br>things from new people</p>
                    </div>
                    <div class="flex flex-col gap-4">
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
                        <div class="password flex flex-col gap-1 items-start">
                            <label class="font-base text-black text-[14px] font-medium" for="password">Password</label>
                            <input class="border py-2 px-4 w-full text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none @error('password') border-red-500 @enderror" type="password" name="password" id="password" placeholder="Enter your password" value="{{ old('password') }}">
                            @error('password')
                            <div class="flex flex-row gap-2">
                                <img class="w-4" src="{{ asset('assets/icons/error.png') }}" alt="">
                                <p class="text-[12px] font-medium text-red-500">{{ $message }}</p>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300 text-white py-2 rounded-lg transition" type="submit">Log in</button>
                    <div class="flex flex-row gap-1 font-base text-sm -mt-2">
                        <p class="text-black">Doesn’t have an account ?</p>
                        <a class="text-blackSec underline underline-offset-2" href="/register">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('assets/js/flash.js') }}"></script>
</body>
</html>



