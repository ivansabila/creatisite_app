<div class="sidebar h-full w-60 fixed border rounded-r-3xl shadow-xl top-0 left-0">
        <div class="h-full flex flex-col justify-between">
            <div class="flex flex-col">
                <a class="flex flex-row items-center gap-3 px-6 py-4 mt-4 mb-8" href="">
                    <img class="w-5" src="{{ asset('assets/img/logo.png') }}" alt="">
                    <p class="font-base  text-xl font-semibold">Creatisite</p>
                </a>
                <div class="menu">
                    <div class="flex flex-row items-center gap-6 py-4 pl-6 hover:bg-blue-400 hover:text-white transition ease-in-out">
                        <i class="fa-solid fa-table-columns w-4"></i>
                        <h1 class="font-base font-medium ">Dashboard</h1>
                    </div>
                    <div class="flex flex-row items-center gap-6  py-4 pl-6 hover:bg-blue-400 hover:text-white transition ease-in-out">
                        <i class="fa-solid fa-users-rectangle w-4"></i>
                        <h1 class="font-base font-medium ">Accounts</h1>
                    </div>
                    <div class="flex flex-row items-center gap-6  py-4 pl-6 hover:bg-blue-400 hover:text-white transition ease-in-out">
                        <i class="fa-brands fa-blogger w-4"></i>
                        <h1 class="font-base font-medium ">Blogs</h1>
                    </div>
                    <div class="flex flex-row items-center gap-6  py-4 pl-6 hover:bg-blue-400 hover:text-white transition ease-in-out">
                        <i class="fa-solid fa-icons w-4"></i>
                        <h1 class="font-base font-medium ">Topics</h1>
                    </div>
                </div>
            </div>
            <div class="mb-8">
                <form class="w-full" action="/logout" method="post">
                    @csrf
                    <button class="flex flex-row gap-6 items-center hover:bg-blue-400 hover:text-white transition ease-in-out w-full py-4 pl-6">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <h1 class="font-base font-medium">Logout</h1>
                    </button>
                </form>
            </div>
        </div>
    </div>