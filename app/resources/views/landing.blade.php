<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home | NP-Camping</title>
</head>

<body class="relative text-lg">
    <x-navbar></x-navbar>
    <div style="background-image: url('{{ Vite::asset('resources/img/camperimg.jpg') }}')"
        class="relative h-[90vh] bg-black overflow-hidden bg-cover bg-bottom flex justify-center">
        <div
            class="mx-4 mt-8 md:mt-[55vh] md:h-[28vh] md:w-1/4 hidden md:flex flex-col items-center backdrop-blur-sm text-center py-4 px-16 rounded text-white">
            <h3 class="font-bold text-2xl mb-4 orange1textNoLink">NP Camping</h3>
            <p>Welkom bij dé camping voor stilte en rust, het perfecte uitje op het platteland!</p>
        </div>
        <div
            class="mx-4 mt-[65vh] h-[18vh] w-1/4 hidden md:flex flex-col items-center justify-center backdrop-blur-sm text-center py-2 px-16 rounded text-white">
            <h3 class="font-bold text-2xl mb-4">Book nu een plaats!</h3>
            <a href="#"><button class="shadow w-24 h-12 orange1 rounded">Boeken</button></a>
        </div>
        <div
            class="md:hidden mx-4 mt-20 h-1/3 flex flex-col items-center justify-center backdrop-blur-sm text-center py-2 px-4 rounded text-white">
            <h3 class="font-bold text-2xl orange1textNoLink">NP Camping</h3>
            <p class="my-4">Dé camping voor rustig uitje op het platteland</p>
            <a href="#"><button class="shadow w-24 h-12 orange1 rounded">Boeken</button></a>

        </div>
    </div>
    <main class="flex flex-col items-center justfiy-center bg-neutral-200 px-0 md:px-44 overflow-hidden">
        <hr class="w-[80%] my-8 border-1">
        <div
            class="h-48 w-9/10 overflow-hidden md:w-3/5 cyan1 bg-zinc-100 rounded shadow py-2 md:py-4 px-4 md:px-8 mb-4 md:mb-16 flex flex-col justfiy-center items-center text-center">
            <h2 class="text-2xl font-semibold">De Camping</h2>
            <p>Bij NP Camping geniet je van een gezellige kampeerplaats in het mooie platteland van noord Groningen!</p>
            <p class="hidden md:block">Met al de wandel- en fietsroutes in de omgeving ben je zeker van alles tegen te komen, zoals ouderwetse dorpen en molens!</p>
        </div>
        <section class="flex flex-col md:flex-row my-4 md:my-8 text-center">
            <div class="w-64 h-48 md:h-auto orange2 my-2 md:cyan1 rounded shadow p-2 bg-zinc-100 mx-2">
                <img class="rounded-lg hidden md:block" src="{{ Vite::asset('resources/img/card1.png') }}"
                    alt="" />
                <div class="p-3">
                    <h3 class="mb-2 text-xl font-bold tracking-tight">Rust en ruimte</h3>
                    <p class="mb-3">Geniet van de frisse Groninger lucht en de prachtige natuur</p>
                </div>
            </div>
            <div class="w-64 h-48 md:h-auto orange2 my-2 md:cyan1 rounded shadow p-2 bg-zinc-100 mx-2">
                <img class="rounded-lg hidden md:block" src="{{ Vite::asset('resources/img/card2.avif') }}"
                    alt="" />
                <div class="p-3">
                    <h3 class="mb-2 text-xl font-bold tracking-tight">Gezellige sfeer</h3>
                    <p class="mb-3">Ontmoet andere kampeerders en ervaar de gastvrijheid van Groningen</p>
                </div>
            </div>
            <div class="w-64 h-48 md:h-auto orange2 my-2 md:cyan1 rounded shadow p-2 bg-zinc-100 mx-2">
                <img class="rounded-lg hidden md:block" src="{{ Vite::asset('resources/img/card3.avif') }}"
                    alt="" />
                <div class="p-3">
                    <h3 class="mb-2 text-xl font-bold tracking-tight">Persoonlijke aandacht</h3>
                    <p class="mb-3">Ons team staat klaar om u te helpen met al uw vragen</p>
                </div>
            </div>
            <div class="w-64 h-48 md:h-auto orange2 my-2 md:cyan1 rounded shadow p-2 bg-zinc-100 mx-2">
                <img class="rounded-lg hidden md:block" src="{{ Vite::asset('resources/img/card4.jpg') }}"
                    alt="" />
                <div class="p-3">
                    <h3 class="mb-2 text-xl font-bold tracking-tight">Unieke locatie</h3>
                    <p class="mb-3">Ontdek de schoonheid van Noord-Nederland</p>
                </div>
            </div>
        </section>
    </main>
    <x-footer></x-footer>
</body>

</html>
