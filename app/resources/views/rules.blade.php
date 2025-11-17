<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body id="rulesBodyBG" class="min-h-screen">
    {{-- <x-navbar></x-navbar> --}}
    <header>
        <div style="background-image: url('{{ Vite::asset('resources/img/camperimg.jpg') }}')"
        class="relative h-[90vh] overflow-hidden bg-cover bg-bottom flex justify-center border-b-4">
        <div
            class="mx-4 mt-[42vh] h-[28vh] flex flex-col bore items-center rulesHeaderBg text-center py-4 px-16 mr-0 rounded-4xl w-full sm:w-3/4 md:w-1/2 lg:w-1/4 text-white lg:mr-[800px]">
            <h3 class="font-bold text-2xl mb-4 underline decoration-white rulesHeaderText">NP Camping</h3>
            <p>Welkom bij dé camping voor stilte en rust, het perfecte uitje op het platteland!</p>
        </div>
    </div>
    </header>
    <div class="max-w-6xl flex flex-col items-center mx-auto mt-16">
        {{-- <img src="{{ Vite::asset('resources/imgs/logo.png') }}" class="w-64"> --}}
        <div class="flex justify-center">
            <h1 class="text-5xl font-bold mb-10 kopje">Huis Regels</h1>
        </div>
        <div class="flex flex-col items-center mt-6 border-t-4 border-b-4 border-indigo-500 rounded-xl huisregelBG w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje">Stilte</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">Na 23:00 tot 07:00 geen lawaai want andere gasten liggen nog te slapen dus houd uw geluids niveau laag.</h4>
            </div>
        </div>
        <div class="flex flex-col items-center mt-6 border-t-4 border-b-4 border-indigo-500 rounded-xl huisregelBG2 w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje">Vuurput</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">U mag alleen de vuurputten gebruiken in overleg met medewerkers</h4>
            </div>
        </div>
        <div class="flex flex-col items-center mt-6 border-t-4 border-b-4 border-indigo-500 rounded-xl huisregelBG w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje">Zwembad</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">1.Het Zwembad is open van 10:00 tot 17:00</h4>
                <h4 class="text-2xl">2.Niet rennen rond het zwembad</h4>
                <h4 class="text-2xl">3.alleen zwemmen wanneer de badmeester aan</h4>
            </div>
        </div>
        <div class="flex flex-col items-center mt-6 border-t-4 border-b-4 border-indigo-500 rounded-xl huisregelBG2 w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje">Huisdieren</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">1.Zorg dat je uw Huisdieren aan de riem houd</h4>
                <h4 class="text-2xl">2.Laat uw hond niet op het kampeerterrein uit</h4>
            </div>
        </div>
        <div class="flex flex-col items-center mt-6 border-t-4 border-b-4 border-indigo-500 rounded-xl huisregelBG w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje">Bezoekers</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">1.Bezoekers mogen langs komen van 07:00 tot 23:00</h4>
                <h4 class="text-2xl">2.Als bezoekers willen overnachten dan moeten ze 20 euro per nacht betalen</h4>
            </div>
        </div>
        <div class="flex flex-col items-center mt-6 border-t-4 border-b-4 border-indigo-500 rounded-xl mb-10 huisregelBG2 w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje">Auto's</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">1.Je kunt je auto op het parkeer terein plaatsen of in uw tent vak</h4>
                <h4 class="text-2xl">2.Als bezoekers willen overnachten dan moeten ze 20 euro per nacht betalen</h4>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>