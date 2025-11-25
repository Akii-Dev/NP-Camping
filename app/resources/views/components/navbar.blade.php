<div id="overlay" class="fixed w-full inset-0 bg-black/40 hidden z-40 md:hidden"></div>
<button id="burgerBtn" class="fixed top-4 left-4 z-50 p-2 orange1 text-white rounded-md md:hidden">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>
<nav id="sideNav"
    class="z-50 left-0 h-screen w-12 fixed bg-zinc-300/95 md:bg-zinc-300/30 text-center md:duration-500 py-2 text-2xl hidden md:block font-bold">
    <div id="navContent"
        class="relative flex flex-col w-full items-center md:transition-all md:duration-400 md:ease-in-out opacity-0 pointer-events-none">
        <a href="../">
            <img class="h-36" src="{{ Vite::asset('resources/img/logo.png') }}" alt="background image">
        </a>
        <hr class="w-[80%] my-8 bg-gray-400 border-1">
        {{-- change ./booking to {{route('booking.index')}} when using proper routing --}}
        <a href="./booking" class="my-6 underline decoration-[#deb841] hover:text-[#deb841]">Boeken</a>

        {{-- change ./rules to {{route('rules')}} when adding a rules view route in a controller --}}
        <a href="./rules" class="my-6 underline decoration-[#deb841] hover:text-[#deb841]">Huisregels</a>
        <a href="{{ route('user.login') }}" class="my-6 underline decoration-[#deb841] hover:text-[#deb841]">Login</a>
        @auth
            <a href="{{ route('customer.show', session('user.id')) }}"
                class="my-6 underline decoration-[#deb841] hover:text-[#deb841]">Account</a>

            <form method="POST" action="{{ route('user.logout') }}">
                @csrf
                <button type="submit" class="my-6 underline decoration-[#deb841] hover:text-[#deb841]">Logout</button>
            </form>
        @endauth
    </div>
</nav>
