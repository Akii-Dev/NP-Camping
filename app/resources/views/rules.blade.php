<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="" class="min-h-screen gradient-bg-rules">
    <x-navbar></x-navbar>
    <header>
        <div style="background-image: url('{{ Vite::asset('resources/imgs/BosRules.jpg') }}')"
            class="h-[90vh] overflow-hidden bg-cover flex justify-center border-b-4 bg-top-right">
            <div
                class="mx-4 mt-[24vh] h-[28vh] flex flex-col items-center rulesHeaderBg text-center py-4 px-16 ml-0 rounded-4xl w-full sm:w-3/4 md:w-1/2 lg:w-1/4 text-white lg:ml-[800px]">
                <h3 class="font-bold text-2xl mb-4 underline decoration-white rulesHeaderText">Informatie regels</h3>
                <p>Welkom op deze pagina vind u Informatie over huisregels. wij hopen dat u zich thuis voelt op onze
                    prachtige camping.</p>
            </div>
        </div>
    </header>
    <div
        class="max-w-2xl flex flex-col items-center mx-auto mb-12 -mt-70 z-20 gradient-bg-rules rounded-4xl border-t-8">
        {{-- <img src="{{ Vite::asset('resources/imgs/logo.png') }}" class="w-64"> --}}
        <div>
            <h1 class="text-5xl font-bold mb-10 kopje border-4 p-4 rounded-4xl mt-10">Huisregels</h1>
        </div>
        <div class="flex flex-col items-start mt-6 p-4 huisregelBG w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje mb-6">Stilte</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">Van 23:00 tot 07:00 houden we de camping stil. Geen vuurputten, luide muziek, of
                    bij andere kampeerders spreken.
                </h4>
            </div>
        </div>
        <div class="flex flex-col items-start mt-6 p-4 huisregelBG2 w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje mb-6">Vuurput</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">De vuurputten zijn alleen te gebruiken in overleg met medewerkers, de vuurputten
                    zijn beschikbaar tussen 17:00 en 23:00.</h4>
            </div>
        </div>
        <div class="flex flex-col items-start mt-6 p-4 huisregelBG w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje mb-6">Zwembad</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">Het zwembad is open van 10:00 tot 17:00. Het zwembad is verder alleen beschikbaar
                    als er een badmeester aanwezig is.</h4>
            </div>
        </div>
        <div class="flex flex-col items-start mt-6 p-4 huisregelBG2 w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje mb-6">Huisdieren</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">Er mag per kampeerplek 1 hond aanwezig zijn. Houdt uw hond aan de lijn camping en
                    ruim uw eigen afval op.
                </h4>
            </div>
        </div>
        <div class="flex flex-col items-start mt-6 p-4 huisregelBG w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje mb-6">visite</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">Visite is welkom tussen 07:00 en 23:00, overnachten kost gasten €20,-.</h4>
            </div>
        </div>
        <div class="flex flex-col items-start mt-6 p-4 mb-10 huisregelBG2 w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje mb-6">Voertuigen</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">Vervoer gelieve op de gratis parkeerplaats houden, er mag 1 auto op uw kampeerplek.
                    Extra voertuigen betalen €1.75 per stuk. Rolstoel vervoer parkeerd gratis.
                </h4>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
