<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login</title>
</head>
<body class="bg-blue-300">
    <div style="background-image: url('{{ Vite::asset('resources/imgs/BosLogin.jpg') }}')"
        class="min-h-screen bg-cover bg-center flex justify-center items-center px-4 py-10">
            <div class="lg:flex-row flex flex-col justify-center relative z-20 items-center">
                <div class="flex p-10 lg:p-16 justify-center items-center rounded-l-2xl bg-gray-500/95 shadow-xl/30 ">
                    <div class="">
                        <h2 class="text-cyan-500 text-4xl mb-16 font-bold">Inloggen</h2>
                        <form class="flex flex-col" action="{{route('user.login')}}" method="POST">
                            @csrf
                            <label class="mt-3 font-bold">Email</label>
                            <input class="bg-white mb-4 rounded-2xl p-2 pr-28 shadow-xl/30" type="text" name="email" placeholder="Email">
                            <label class="font-bold">Wachtwoord</label>
                            <input class="bg-white mb-6 rounded-2xl p-2 pr-28 shadow-xl/30" type="password" name="password" placeholder="Password">
                            <div class="flex justify-center">
                                <button class="bg-white mb-6 rounded-2xl p-2 w-60 shadow-xl/30 mt-12 text-xl font-bold text-cyan-500" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex flex-col p-10 lg:p-16 justify-center items-center rounded-r-2xl bg-white/95 shadow-xl/30">
                    <h2 class="text-4xl">Nog geen account?</h2>
                    <p class="mt-6 mb-6">Maak vandaag nog een account aan.</p>
                    <div class="flex w-72 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-7 flex-none text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                        <p>Als er nog geen account is aangemaakt.</p>
                    </div>
                    <div class="flex w-72 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-7 flex-none text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                        <p>Je hebt je gemaakte boekingen in één overzicht.</p>
                    </div>
                    <div class="flex w-72 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-7 flex-none text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                        <p>Bekijk en/of wijzig de details van je boeking.</p>
                    </div>
                    <div class="flex w-72 mb-12">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-7 flex-none text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                        <p>Maak je verblijf compleet en voeg extra's toe aan je boeking.</p>
                    </div>
                    <a class="bg-amber-300 text-xl font-bold rounded-2xl p-2 px-20 shadow-xl/30" href="{{route('user.register')}}">Registeer</a>
                </div>
            </div>
    </div>
    <footer class="text-white bg-zinc-900 h-auto w-auto px-2 lg:px-40 py-2 grid grid-row-3 lg:grid-cols-3 lg:h-36 lg:divide-x-1 divide-solid divide-white">
        <div class="px-2 text-sm row-span-1 lg:row-span-0 border-b-2 lg:border-b-0">
            <h3 class="font-semibold text-lg">Contact</h3>
            <p>Email: info@npcamping.nl</p>
            <p>Phone: 06 12312312</p>
        </div>
        <div class="px-2 text-sm row-span-1 lg:row-span-0 border-b-2 lg:border-b-0">
            <h3 class="font-semibold text-lg">NP Camping</h3>
            <p>Adres: Borgerweg 23</p>
            <p>Postcode: 9462RA Gasselte</p>
        </div>
        <div class="px-2 text-sm row-span-1 lg:row-span-0 border-b-2 lg:border-b-0">
            <h3 class="font-semibold text-lg">Informatie</h3>
            <p>Open van 1 april tot en met 31 oktober</p>
        </div>
    </footer>

    
    
    {{-- this is for errors which are not input validation errors --}}
                @if (session('error'))
                    <div class="bg-red-500">
                        {{ session('error') }}
                    </div>
                @endif
                {{-- input validation errors --}}
                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <p class="bg-red-500">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
</body>
</html>