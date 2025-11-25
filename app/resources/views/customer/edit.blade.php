<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Account_Edit | NP-Camping</title>
</head>

<body class="bg-neutral-200">
    <x-navbar></x-navbar>
    <main class="flex flex-col items-center min-h-screen px-8">
        <div class="orange2 my-12 bg-zinc-100 p-4 md:px-20">

            <form action="{{ route('customer.update', $customer->user_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="my-4">
                    <label for="title">Aanhef:</label>
                    <input type="text" name="title" id="title" value="{{ $customer->title }}"
                        placeholder="Drs, Mr, Mevr">
                </div>
                <div class="my-4">
                    <label for="initials">Voorletters:</label>
                    <input type="text" name="initials" id="initials" value="{{ $customer->initials }}"
                        placeholder="J.A" required>
                </div>
                <div class="my-4">
                    <label for="intersertion">Tussenvoegsel:</label>
                    <input type="text" name="intersertion" id="intersertion" value="{{ $customer->intersertion }}"
                        placeholder="van">
                </div>
                <div class="my-4">
                    <label for="surname">Achternaam:</label>
                    <input type="text" name="surname" id="surname" value="{{ $customer->surname }}"
                        placeholder="Brugge" required>
                </div>
                <div class="my-4">
                    <label for="street">Straat:</label>
                    <input type="text" name="street" id="street" value="{{ $customer->street }}"
                        placeholder="Druifstraat" required>
                </div>
                <div class="my-4">
                    <label for="house_number">Huisnummer:</label>
                    <input type="number" name="house_number" id="house_number" value="{{ $customer->house_number }}"
                        placeholder="8" required>
                </div>
                <div class="my-4">
                    <label for="house_number_addition">Toevoeging:</label>
                    <input type="text" name="house_number_addition" id="house_number_addition"
                        value="{{ $customer->house_number_addition }}" placeholder="A">
                </div>
                <div class="my-4">
                    <label for="postal_code">Postcode:</label>
                    <input type="text" name="postal_code" id="postal_code" value="{{ $customer->postal_code }}"
                        placeholder="1234AB" required>
                </div>
                <div class="my-4">
                    <label for="city">Woonplaats:</label>
                    <input type="text" name="city" id="city" value="{{ $customer->city }}"
                        placeholder="Leeuwarden" required>
                </div>
                <div class="my-4">
                    <label for="country">Land:</label>
                    <input type="text" name="country" id="country" value="{{ $customer->country }}"
                        placeholder="Nederland" required>
                </div>
                <div class="my-4">
                    <label for="phone_number">Telefoonnummer:</label>
                    <input type="tel" name="phone_number" id="phone_number" value="{{ $customer->phone_number }}"
                        placeholder="+31 6 12345678" required>
                </div>
                <div class="my-4">
                    <button type="submit"
                        class="underline decoration-[#deb841] hover:text-[#deb841] text-lg text-center w-full">Aanpassingen
                        opslaan</button>
                </div>
            </form>
        </div>
    </main>
    <x-footer></x-footer>

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
