<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-gray-600 ">

    </nav>
    <header>
    </header>
    <div class="flex flex-col items-center">
        <img src="{{ Vite::asset('resources/imgs/logo.png') }}" class="w-64 h-64">
        <div class="flex justify-center">
            <h1 class="text-5xl font-bold mb-10 kopje">Huis Regels</h1>
        </div>
        <div class="flex flex-col items-center mt-6 border-t-4 border-b-4 border-indigo-500 w-2xl rounded-xl huisregelBG">
            <h1 class="text-4xl font-bold kopje">Stilte</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">Na 23:00 tot 07:00 geen lawaai want andere gasten liggen nog te slapen dus houd uw geluids niveau laag.</h4>
            </div>
        </div>
        <div class="flex flex-col items-center mt-6 border-t-4 border-b-4 border-indigo-500 w-2xl rounded-xl huisregelBG2">
            <h1 class="text-4xl font-bold kopje">Vuurput</h1>
            <h4 class="text-2xl">U mag alleen de vuurputten gebruiken in overleg met medewerkers</h4>
        </div>
        <div class="flex flex-col items-center mt-6 border-t-4 border-b-4 border-indigo-500 w-2xl rounded-xl huisregelBG">
            <h1 class="text-4xl font-bold kopje">Zwembad</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">1.Het Zwembad is open van 10:00 tot 17:00</h4>
                <h4 class="text-2xl">2.Niet rennen rond het zwembad</h4>
                <h4 class="text-2xl">3.alleen zwemmen wanneer de badmeester aan</h4>
            </div>
        </div>
        <div class="flex flex-col items-center mt-6 border-t-4 border-b-4 border-indigo-500 w-2xl rounded-xl huisregelBG2">
            <h1 class="text-4xl font-bold kopje">Huisdieren</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">1.Zorg dat je uw Huisdieren aan de riem houd</h4>
                <h4 class="text-2xl">2.Laat uw hond niet op het kampeerterrein uit</h4>
            </div>
        </div>
        <div class="flex flex-col items-center mt-6 border-t-4 border-b-4 border-indigo-500 w-2xl rounded-xl huisregelBG">
            <h1 class="text-4xl font-bold kopje">Bezoekers</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">1.Bezoekers mogen langs komen van 07:00 tot 23:00</h4>
                <h4 class="text-2xl">2.Als bezoekers willen overnachten dan moeten ze 20 euro per nacht betalen</h4>
            </div>
        </div>
        <div class="flex flex-col items-center mt-6 border-t-4 border-b-4 border-indigo-500 w-2xl rounded-xl huisregelBG2">
            <h1 class="text-4xl font-bold kopje">Auto's</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">1.Je kunt je auto op het parkeer terein plaatsen of in uw tent vak</h4>
                <h4 class="text-2xl">2.Als bezoekers willen overnachten dan moeten ze 20 euro per nacht betalen</h4>
            </div>
        </div>
    </div>
    <footer>

    </footer>
</body>
</html>
