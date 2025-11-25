<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="bg-neutral-200">
    <x-navbar></x-navbar>
    <div class="md:w-full md:flex md:flex-row md:justify-center">
        <section class="p-2 md:w-[40%] md:mr-12 md:mt-4">
            <img class="rounded-lg" src="{{ Vite::asset('resources/img/plattegrond.jpg') }}" alt="">
        </section>
        <main class="flex justify-center mb-6 mt-4 md:mt-6">
            <div class="grid grid-cols-2 gap-4">
                @foreach ($spots as $spot)
                    @if ($spot->booked == 1)
                        <div class="bg-zinc-300 w-36 flex flex-col items-center p-2 rounded-lg">
                            <button class="shadow w-24 h-12 bg-orange-800 opacity-50 rounded" disabled>Bezet</button>
                        @elseif ($spot->booked == 0)
                            <div class="bg-zinc-300 w-36 flex flex-col items-center p-2 rounded-lg">
                                <button class="hover:cursor-pointer shadow w-24 h-12 orange1 rounded"
                                    onclick="selectSpot({{ $spot->id }})">Boek</button>
                    @endif

                    <h2>Plaats {{ $spot->id }}</h2>
                    {{-- <h2>Is it booked? {{ $spot->booked }}</h2> --}}
            </div>
            @endforeach

            <div id="overlayBoeking" class="fixed inset-0 bg-black/40 hidden z-40"></div>
            <div id="popup"
                class="top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 p-2 flex flex-col items-center fixed w-[80%] md:w-[40%] h-48 rounded-xl bg-zinc-300 hidden z-50">
                <div id="popupContent" class="relative flex flex-col items-center">
                    <p id="spot-name" class="font-semibold text-lg"></p>
                    <p id="description" class="my-6">Deze plaats boeken?</p>
                    <div class="flex flex-row justify-between">
                        <a href="{{ route('booking.create') }}"><button
                                class="hover:cursor-pointer shadow w-24 h-12 orange1 rounded mr-2">Boeken</button></a>
                        <button id="closePopup"
                            class="hover:cursor-pointer shadow w-24 h-12 bg-neutral-400 rounded ml-2">Annuleren</button>
                    </div>
                </div>
            </div>

            {{-- integrate in JS file w/ proper variables (line 18 on commit "styling voor boeking pagina") --}}
            <script>
                function selectSpot(id) {
                    const popup = document.getElementById('popup');
                    const overlayBoeking = document.getElementById('overlayBoeking');
                    const burgerBtn = document.getElementById('burgerBtn');
                    popup.classList.remove('hidden');
                    overlayBoeking.classList.remove('hidden');
                    burgerBtn.classList.add('hidden');
                    document.getElementById('spot-name').innerText = `Plaats ${id}`;
                    // set session storage for spot id. retrieve this in booking.create route
                    sessionStorage.setItem('selectedSpot', id);
                }
            </script>
        </main>
    </div>
    <x-footer></x-footer>
</body>

</html>
