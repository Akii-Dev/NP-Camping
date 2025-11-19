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
<div class="h-screen flex justify-center items-center">
    <div class="flex h-[500px] p-20 justify-center items-center rounded-l-2xl  bg-blue-200">
        <div class="">
            <h2 class="text-cyan-500 text-4xl">Inloggen</h2>
            <form class="flex flex-col" action="{{route('user.login')}}" method="POST">
                @csrf
                <label class="mt-3">Email</label>
                <input class="bg-white mb-4 rounded-2xl p-2 pr-28" type="text" name="email" placeholder="Email">
                <label>Login</label>
                <input class="bg-white mb-6 rounded-2xl p-2 pr-28" type="password" name="password" placeholder="Password">
                <button class="bg-white mb-6 rounded-2xl p-2" type="submit">Login</button>
            </form>
        </div>
    </div>
    <div class="flex flex-col h-[500px] p-20 justify-center items-center rounded-r-2xl bg-white">
        <h2 class="text-4xl">Nog geen account?</h2>
        <p class="mt-6 mb-6">Maak vandaag nog een account aan.</p>
        <div class="flex w-64">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
            <p>U heeft nog geen account.</p>
        </div>
        <div class="flex w-64">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="min-h min-w size-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
            <p>Bekijk en/of wijzig de details van je boeking en reisgezelschap.</p>
        </div>
        <a class="bg-amber-300 rounded-2xl p-4" href="{{route('user.register')}}">Nog geen account?</a>
    </div>
</div>
    
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