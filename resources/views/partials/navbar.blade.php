<nav class="border py-4 px-8 flex flex-row justify-between items-center fixed w-full z-10 bg-white top-0">
            <div class="flex flex-row gap-8 ">
                <a class="flex flex-row items-center gap-3" href="">
                    <img class="w-5" src="{{ asset('assets/img/logo.png') }}" alt="">
                    <p class="font-base text-black text-xl font-semibold">Creatisite</p>
                </a>
                @if (Request::is('/'))
                
                
                <form class="" action="">
                    <div class="w-full h-full relative">
                        <i class="fa-solid fa-magnifying-glass fa-sm absolute top-1/2 left-3 -translate-y-1/3 text-border"></i>
                        <input class="border py-2 px-4 w-96 pl-10 text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none" type="text" name="search" id="search" placeholder="Search">
                    </div>
                </form>
                @endif
            </div>
            <div class="flex flex-row items-center gap-12">
                @if (Request::is('/'))
                <a class="flex flex-row items-center gap-3" href="/blogs/add">
                    <i class="fa-regular fa-pen-to-square fa-lg text-blackSec/80"></i>
                    <p class="font-base text-blackSec/80">Write</p>
                </a>
                @endif

                <div id="dropdownButton" class="relative" onclick="dropdown()">
                    <div class="flex flex-row gap-4 items-center cursor-pointer">
                        <div class="flex flex-col items-end">
                            <h1 class="font-base text-sm font-semibold text-black">ivan adiyatma</h1>
                            <p class="font-base text-[12px] text-blackSec">ivan</p>
                        </div>
                        <img class="w-10 h-10 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                    </div>
                    <div id="dropdownItems" class="border border-border py-2 rounded-lg w-40 absolute top-12 -left-0 hidden bg-white ">
                        <a href=""><p class="font-base text-blackSec/80 hover:bg-blue-400 hover:text-white text-sm py-2 px-6 cursor-pointer transition ease-in-out">Profile</p></a>
                        <a href=""><p class="font-base text-blackSec/80 hover:bg-blue-400 hover:text-white text-sm py-2 px-6 cursor-pointer transition ease-in-out">My Blog</p></a>
                        <a href=""><p class="font-base text-blackSec/80 hover:bg-blue-400 hover:text-white text-sm py-2 px-6 cursor-pointer transition ease-in-out">Reading List</p></a>
                        @auth
                            <form class="" action="/logout" method="post">
                                @csrf
                                <button class="font-base text-blackSec/80 hover:bg-blue-400 hover:text-white text-sm py-2 px-6 text-left w-full cursor-pointer transition ease-in-out" type="submit">Logout</button>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <script src="{{ asset('assets/js/dropdown.js') }}"></script>