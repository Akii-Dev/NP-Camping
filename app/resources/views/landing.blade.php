<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home | NP-Camping</title>
</head>

<body class="bg-neutral-300 relative text-lg">
    <x-navbar></x-navbar>
    <div style="background-image: url('{{ Vite::asset('resources/img/camperimg.jpg') }}')"
        class="relative h-[90vh] bg-black overflow-hidden bg-cover bg-bottom flex justify-center">
        <div
            class="mx-4 mt-[55vh] h-[28vh] w-1/4 flex flex-col items-center backdrop-blur-sm text-center py-4 px-16 rounded text-white">
            <h3 class="font-bold text-2xl mb-4 underline decoration-white yellow1textNonLink">NP Camping</h3>
            <p>Welkom bij dé camping voor stilte en rust, het perfecte uitje op het platteland!</p>
        </div>
        <div
            class="mx-4 mt-[65vh] h-[18vh] w-1/4 flex flex-col items-center justify-center backdrop-blur-sm text-center py-2 px-16 rounded text-white">
            <h3 class="font-bold text-2xl mb-4">Book nu een plaats!</h3>
            <a href="#"><button class="w-24 h-12 orange1 rounded">Booken</button></a>
        </div>
    </div>
    <main class="flex flex-col items-center justfiy-center bg-neutral-200 px-44">
        <hr class="w-[80%] my-8 border-1">
        <div
            class="h-48 w-3/5 cyan1 bg-zinc-100 rounded py-4 px-8 mb-16 flex flex-col justfiy-center items-center text-center">
            <h2 class="text-2xl font-semibold">titel hier</h2>
            <p>heel veel tekst heel veel tekst heel veel tekst heel veel tekst heel veel tekst heel veel tekst heel veel
                tekst heel veel tekst heel veel tekst heel veel tekst heel veel tekst heel veel tekst</p>
        </div>
        <section class="flex flex-row my-8 text-center">
            <div class="w-64 cyan1 rounded shadow-xl p-2 bg-zinc-100 mx-2">
                <img class="rounded-lg" src="./img/card1.png" alt="" />
                <div class="p-3">
                    <h3 class="mb-2 text-xl font-bold tracking-tight">Rust en ruimte</h3>
                    <p class="mb-3">Met natuurgebieden in de omgeving zal u hier van absolute rust genieten</p>
                </div>
            </div>
            <div class="w-64 cyan1 rounded shadow p-2 bg-zinc-100 mx-2">
                <img class="rounded-lg" src="./img/card2.avif" alt="" />
                <div class="p-3">
                    <h3 class="mb-2 text-xl font-bold tracking-tight">Gezellige sfeer</h3>
                    <p class="mb-3">Bij de camping is er genoeg ruimte om met elkaar bezig te gaan</p>
                </div>
            </div>
            <div class="w-64 cyan1 rounded shadow p-2 bg-zinc-100 mx-2">
                <img class="rounded-lg" src="./img/card3.avif" alt="" />
                <div class="p-3">
                    <h3 class="mb-2 text-xl font-bold tracking-tight">Persoonlijke aandacht</h3>
                    <p class="mb-3">Er is altijd een medewerker beschikbaar om u te helpen</p>
                </div>
            </div>
            <div class="w-64 cyan1 rounded shadow p-2 bg-zinc-100 mx-2">
                <img class="rounded-lg" src="./img/card4.jpg" alt="" />
                <div class="p-3">
                    <h3 class="mb-2 text-xl font-bold tracking-tight">Unieke locatie</h3>
                    <p class="mb-3">Ontdek de prachtige wandelroutes de dorpjes in de buurt</p>
                </div>
            </div>
        </section>
    </main>
    <x-footer></x-footer>
</body>

</html>
