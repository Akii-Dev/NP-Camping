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
            <h1 class="text-4xl font-bold kopje mb-6">Geluidloosheid</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">Na 23:00 tot 07:00 geen lawaai want andere gasten liggen nog
                    te slapen dus houd uw geluids niveau laag. Zodat u en andere bezoekers een goede nacht rust krijgen.
                </h4>
            </div>
        </div>
        <div class="flex flex-col items-start mt-6 p-4 huisregelBG2 w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje mb-6">Vuurput</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">U mag alleen de vuurputten gebruiken in overleg met medewerkers.
                    U kunt het gebruik maken van de vuurputten tussen 17:00 tot 23:00.</h4>
            </div>
        </div>
        <div class="flex flex-col items-start mt-6 p-4 huisregelBG w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje mb-6">Zwembad</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">Het zwembad is open tussen 10:00 tot 17:00. Voor u veiligheid
                    mag u alleen zwemmen als er een badmeester aanwezig is. Let op u mag niet rennen bij
                    of rondom het zwembad voor u veiligheid word dit verboden.</h4>
            </div>
        </div>
        <div class="flex flex-col items-start mt-6 p-4 huisregelBG2 w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje mb-6">Honden</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">Wij laten alleen honden toe op het terrein dus geen andere
                    huisdieren. Per plek maximaal maar 1 hond. Zorg dat u uw hond aan de lijn houd,
                    zodat het anderen niet lastig valt.
                </h4>
            </div>
        </div>
        <div class="flex flex-col items-start mt-6 p-4 huisregelBG w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje mb-6">visite</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">Visite mag langs komen van 07:00 tot 23:00 Zorg dat er
                    niet te veel overlast is. Als de visite wil overnachten dan moeten
                    ze €20 euro per nacht betalen</h4>
            </div>
        </div>
        <div class="flex flex-col items-start mt-6 p-4 mb-10 huisregelBG2 w-auto md:w-2xl">
            <h1 class="text-4xl font-bold kopje mb-6">Auto's</h1>
            <div class="flex flex-col text-left w-full px-6">
                <h4 class="text-2xl">U kunt uw auto gratis op het parkeer terein plaatsen of in
                    uw tent vak als u een gast bent. Dit kan alleen als u 1 auto heeft voor elke extra auto betaalt u
                    €1,75 per nacht meer.</h4>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
