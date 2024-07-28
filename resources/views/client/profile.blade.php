@extends('partials.main')

@section('content')
    <div class=" mx-80 gap-6 flex flex-col">
        <a class="flex flex-row gap-2 items-center cursor-pointer">
            <i class="fa-solid fa-chevron-left text-blackSec"></i>
            <p class="font-base text-blackSec text-sm">Back</p>
        </a>
        <div class="flex flex-col gap-12">
            <h1 class="font-base font-bold text-2xl text-black">Profile Information</h1>
            <div class="flex flex-col border pb-8 rounded-xl">
                <div class="rounded-t-xl relative">
                    <img class="object-cover w-full h-48 rounded-t-xl" src="{{ asset('assets/img/typing.jpg') }}" alt="">
                    <img class="object-cover w-32 h-32 border rounded-full absolute top-32 left-10" src="{{ asset('assets/img/person.jpg') }}" alt="">
                </div>
                <div class="flex flex-row gap-4 justify-end px-6">
                    <button class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300 text-white py-2 px-4 mt-4 rounded-lg transition cursor-pointer" type="button">Change password</button>
                    <button class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300 text-white py-2 px-4 mt-4 rounded-lg transition cursor-pointer" type="button">Change profile</button>
                </div>
                <div class="flex flex-row justify-between mt-10 px-10">
                    <div class="flex flex-col">
                        <p class="font-base text-blackSec text-sm">Username</p>
                        <p class="font-base text-black text-xl font-semibold">Ivan Adiyatma</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-base text-blackSec text-sm">Email</p>
                        <p class="font-base text-black text-xl font-semibold">ivan@gmail.com</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-base text-blackSec text-sm">Phone number</p>
                        <p class="font-base text-black text-xl font-semibold">082345465833</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection