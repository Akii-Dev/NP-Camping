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
        <main class="flex flex-row justify-center p-12">
        <form action="{{ route('booking.store') }}" method="POST"
            class="flex flex-col items-center justify-center items-start mt-6 p-4 huisregelBG w-auto md:w-2xl justify-center bg-zinc-100 orange2 mx-72">
            @csrf
            <h2 class="text-3xl">Persoonsgegevens</h2>
            <div class="my-4 flex flex-col items-center justify-center">
                <label for="spot">Plaatsnummer:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="number" name="spot" id="spot" value=""
                    placeholder="4" required>
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="persons">Aantal personen:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="number" name="persons" id="persons" value=""
                    placeholder="4" required>
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="dog">Hond</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="checkbox" name="dog" id="dog" value="1">
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="extra_tent">Extra tenten:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="number" name="extra_tent" id="extra_tent"
                    value="" placeholder="1">
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="camping_means">Kampeermiddel:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="text" name="camping_means" id="camping_means"
                    value="" placeholder="Tent, caravan" required>
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="date_start">Datum aankomst:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="date" name="date_start" id="date_start"
                    value="" placeholder="" required>
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="end_date">Vertrekdatum:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="date" name="date_end" id="date_end" value=""
                    placeholder="" required>
            </div>

            {{-- user info --}}
            <h2 class="text-3xl">Persoonsgegevens</h2>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="title">Aanhef:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="text" name="title" id="title"
                    value="{{ $customer->title }}" placeholder="Drs, Mr, Mevr">
            </div>
            <div class="my-4 flex flex-col items-center justify-center">
                <label for="initials">Voorletters:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="text" name="initials" id="initials"
                    value="{{ $customer->initials }}" placeholder="J.A" required>
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="intersertion">Tussenvoegsel:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="text" name="intersertion" id="intersertion"
                    value="{{ $customer->intersertion }}" placeholder="van">
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="surname">Achternaam:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="text" name="surname" id="surname"
                    value="{{ $customer->surname }}" placeholder="Brugge" required>
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="street">Straat:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="text" name="street" id="street"
                    value="{{ $customer->street }}" placeholder="Druifstraat" required>
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="house_number">Huisnummer:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="number" name="house_number" id="house_number"
                    value="{{ $customer->house_number }}" placeholder="8" required>
            </div>


            <div class="my-4 flex flex-col items-center justify-center">
                <label for="house_number_addition">Toevoeging:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="text" name="house_number_addition"
                    id="house_number_addition" value="{{ $customer->house_number_addition }}" placeholder="A">
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="postal_code">Postcode:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="text" name="postal_code" id="postal_code"
                    value="{{ $customer->postal_code }}" placeholder="1234AB" required>
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="city">Woonplaats:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="text" name="city" id="city"
                    value="{{ $customer->city }}" placeholder="Leeuwarden" required>
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="country">Land:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="text" name="country" id="country"
                    value="{{ $customer->country }}" placeholder="Nederland" required>
            </div>

            <div class="my-4 flex flex-col items-center justify-center">
                <label for="phone_number">Telefoonnummer:</label>
                <input class="bg-neutral-400 rounded-lg px-2" type="tel" name="phone_number" id="phone_number"
                    value="{{ $customer->phone_number }}" placeholder="+31 6 12345678" required>
            </div>

            <button type="submit">Maak booking aan</button>
        </form>
        {{-- errors declared in session --}}
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
