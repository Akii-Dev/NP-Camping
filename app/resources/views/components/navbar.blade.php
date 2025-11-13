<div id="overlay" class="fixed inset-0 bg-black/40 hidden z-[5] md:hidden"></div>

<button id="burgerBtn"
    class="fixed top-4 left-4 z-20 p-2 bg-zinc-800 text-white rounded-md focus:outline-none md:hidden">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>

<nav id="sideNav"
    class="z-10 left-0 h-screen w-12 fixed bg-zinc-300/30 text-center duration-500 py-2 text-2xl font-bold">
    <div id="navContent"
        class="relative flex flex-col items-center transition-all duration-400 ease-in-out opacity-0 pointer-events-none">
        <a href="#">
            <img class="h-36" src="{{ Vite::asset('resources/img/logo.png') }}" alt="background image">
        </a>

        <hr class="w-[80%] my-8 bg-gray-400 border-1">
        <a href="#" class="my-6 underline decoration-black yellow1text">Booken</a>
        <a href="#" class="my-6 underline decoration-black yellow1text">Account</a>
        <a href="#" class="my-6 underline decoration-black yellow1text">Huisregels</a>
    </div>
</nav>