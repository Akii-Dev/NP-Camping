<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Register | NP-Camping</title>
</head>
<body class="bg-blue-300">
    <x-navbar></x-navbar>
    <div style="background-image: url('{{ Vite::asset('resources/imgs/BosLogin.jpg') }}')"
        class="min-h-screen bg-cover bg-center flex justify-center items-center px-4 py-10">

            <div class="flex flex-col lg:flex-row shadow-2xl overflow-hidden">

                {{-- Register panel --}}
                <div class="flex flex-col p-10 lg:p-16 justify-center rounded-2xl bg-gray-500/95 shadow-xl/30 ">
                    <h2 class="text-cyan-500 text-4xl font-bold mb-10 lg:mb-16">Registreren</h2>

                    <form class="flex flex-col w-full max-wxs lg:w-80" action="{{route('user.register')}}" method="POST">
                        @csrf
                        <label class="mt-3 font-bold">Email</label>
                        <input class="bg-white mb-4 rounded-2xl p-2 shadow-xl/30" type="text" name="email" placeholder="Email">

                        <label class="font-bold">Wachtwoord</label>
                        <input class="bg-white mb-4 rounded-2xl p-2 shadow-xl/30" type="password" name="password" placeholder="Wachtwoord">

                        <label class="mt-3 font-bold">Herhaal wachtwoord</label>
                        <input class="bg-white mb-6 rounded-2xl p-2 shadow-xl/30" type="password" name="password_confirmation" placeholder="Herhaal wachtwoord">

                        <button class="bg-white mt-8 rounded-2xl p-2 w-full shadow-xl/30 text-xl font-bold text-cyan-500" type="submit">Registreer</button>
                    </form>
    <a href="{{ route('user.login') }}" class="text-center font-semibold text-cyan-500 underline pt-4">Al een account? Log in</a>

                </div>
            </div>
    </div>

    <footer
        class="text-white bg-zinc-900 h-auto w-auto px-2 lg:px-40 py-2 grid grid-row-3 lg:grid-cols-3 lg:h-36 lg:divide-x-1 divide-solid divide-white">
        <div class="px-2 text-sm row-span-1 lg:row-span-0 border-b-2 lg:border-b-0">
            <h3 class="font-semibold text-lg">Contact</h3>
            <p>Email: info@npcamping.nl</p>
            <p>Phone: 06 12341234</p>
        </div>
        <div class="px-2 text-sm row-span-1 lg:row-span-0 border-b-2 lg:border-b-0">
            <h3 class="font-semibold text-lg">NP Camping</h3>
            <p>Adres: Kruimelweg 23</p>
            <p>Postcode: 8462RA Broden</p>
        </div>
        <div class="px-2 text-sm row-span-1 lg:row-span-0 border-b-2 lg:border-b-0">
            <h3 class="font-semibold text-lg">Informatie</h3>
            <p>Wij zijn open van 4 juli tot 16 augustus</p>
            <p>Dus de hele zomervakantie kunt u boeken</p>
        </div>
    </footer>

    {{-- sessions error handles manualy declared errors in the session --}}
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
