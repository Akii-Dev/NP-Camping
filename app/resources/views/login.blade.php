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
    <x-navbar></x-navbar>
    <div style="background-image: url('{{ Vite::asset('resources/imgs/BosLogin.jpg') }}')"
        class="min-h-screen bg-cover bg-center flex justify-center items-center px-4 py-10">

            <div class="flex flex-col lg:flex-row shadow-2xl overflow-hidden">

                {{-- Login panel --}}
                <div class="flex flex-col p-10 lg:p-16 justify-center rounded-2xl lg:rounded-l-2xl lg:rounded-none bg-gray-500/95 shadow-xl/30 ">
                    <h2 class="text-cyan-500 text-4xl font-bold mb-10 lg:mb-16">Inloggen</h2>

                    <form class="flex flex-col w-full max-wxs lg:w-80" action="{{route('user.login')}}" method="POST">
                        @csrf
                        <label class="mt-3 font-bold">Email</label>
                        <input class="bg-white mb-4 rounded-2xl p-2 shadow-xl/30" type="text" name="email" placeholder="Email">

                        <label class="font-bold">Wachtwoord</label>
                        <input class="bg-white mb-6 rounded-2xl p-2 shadow-xl/30" type="password" name="password" placeholder="Password">

                        <button class="bg-white mt-8 rounded-2xl p-2 w-full shadow-xl/30 text-xl font-bold text-cyan-500" type="submit">Login</button>
                    </form>
                </div>

                {{-- Register panel --}}
                <div class="flex flex-col p-10 mt-10 lg:mt-0 lg:p-16 justify-center 
                            items-center lg:items-start rounded-2xl lg:rounded-r-2xl lg:rounded-none bg-white/95 shadow-xl/30">
                    <h2 class="text-3xl lg:text-4xl font-bold">Nog geen account?</h2>
                    <p class="mt-4 mb-6">Maak vandaag nog een account aan.</p>

                    <div class="space-y-3 mb-10">
                        <div class="flex gap-2 items-start w-64">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-7 flex-none text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                            <p>Als er nog geen account is aangemaakt.</p>
                        </div>

                        <div class="flex gap-2 items-start w-64">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-7 flex-none text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                            <p>Je hebt je gemaakte boekingen in één overzicht.</p>
                        </div>

                        <div class="flex gap-2 items-start w-64">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-7 flex-none text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                            <p>Bekijk en/of wijzig de details van je boeking.</p>
                        </div>

                        <div class="flex gap-2 items-start w-64">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-7 flex-none text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                            <p>Maak je verblijf compleet en voeg extra's toe aan je boeking.</p>
                        </div>
                    </div>
                    <a class="bg-amber-300 text-xl font-bold rounded-2xl p-3 w-full max-w-xs text-center lg:px-20 lg:w-auto shadow-xl/30" href="{{route('user.register')}}">Registreer</a>
                </div>
                {{-- <a class="bg-amber-300 text-xl font-bold rounded-2xl p-2 px-20 shadow-xl/30"
                    href="{{ route('user.register') }}">Registeer</a> --}}
            </div>
        </div>
    </div>
    <footer
        class="text-white bg-zinc-900 h-auto w-auto px-2 lg:px-40 py-2 grid grid-row-3 lg:grid-cols-3 lg:h-36 lg:divide-x-1 divide-solid divide-white">
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

    
    
      {{-- errors declared using the error session --}}
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
