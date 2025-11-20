<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <label for="spot">Plaatsnummer:</label>
        <input type="number" name="spot" id="spot" value="" placeholder="4">
        <br>
        <label for="persons">Aantal personen:</label>
        <input type="number" name="persons" id="persons" value="" placeholder="4" required>
        <br>
        <label for="dog">Hond</label>
        <input type="checkbox" name="dog" id="dog" value="1">
        <br>
        <label for="extra_tent">Extra tenten:</label>
        <input type="number" name="extra_tent" id="extra_tent" value="" placeholder="1">
        <br>
        <label for="camping_means">Kampeermiddel:</label>
        <input type="text" name="camping_means" id="camping_means" value="" placeholder="Tent, caravan"
            required>
        <br>
        <label for="date_start">Datum aankomst:</label>
        <input type="date" name="date_start" id="date_start" value="" placeholder="" required>
        <br>
        <label for="end_date">Vertrekdatum:</label>
        <input type="date" name="end_date" id="end_date" value="" placeholder="" required>
        <br>
        <h2 class="text-3xl">Persoonsgegevens</h1>
        <label for="title">Aanhef:</label>
        <input type="text" name="title" id="title" value="{{ $customer->title }}" placeholder="Drs, Mr, Mevr">
        <br>
        <label for="initials">Voorletters:</label>
        <input type="text" name="initials" id="initials" value="{{ $customer->initials }}" placeholder="J.A"
            required>
        <br>
        <label for="intersertion">Tussenvoegsel:</label>
        <input type="text" name="intersertion" id="intersertion" value="{{ $customer->intersertion }}"
            placeholder="van">

        <label for="surname">Achternaam:</label>
        <input type="text" name="surname" id="surname" value="{{ $customer->surname }}" placeholder="Brugge"
            required>
        <br>
        <label for="street">Straat:</label>
        <input type="text" name="street" id="street" value="{{ $customer->street }}" placeholder="Druifstraat"
            required>
        <br>
        <label for="house_number">Huisnummer:</label>
        <input type="number" name="house_number" id="house_number" value="{{ $customer->house_number }}"
            placeholder="8" required>

        <label for="house_number_addition">Toevoeging:</label>
        <input type="text" name="house_number_addition" id="house_number_addition"
            value="{{ $customer->house_number_addition }}" placeholder="A">
        <br>
        <label for="postal_code">Postcode:</label>
        <input type="text" name="postal_code" id="postal_code" value="{{ $customer->postal_code }}"
            placeholder="1234AB" required>

        <label for="city">Woonplaats:</label>
        <input type="text" name="city" id="city" value="{{ $customer->city }}" placeholder="Leeuwarden"
            required>
        <br>
        <label for="country">Land:</label>
        <input type="text" name="country" id="country" value="{{ $customer->country }}"
            placeholder="Nederland" required>
        <br>
        <label for="phone_number">Telefoonnummer:</label>
        <input type="tel" name="phone_number" id="phone_number" value="{{ $customer->phone_number }}"
            placeholder="+31 6 12345678" required>
        <br>
        <button type="submit">Maak booking aan</button>
    </form>
</body>

</html>
