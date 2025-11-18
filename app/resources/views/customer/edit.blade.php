<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('customer.update', $customer->user_id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Aanhef:</label>
        <input type="text" name="title" id="title" value="{{ $customer->title }}" placeholder="Drs, Mr, Mevr">
        <br>
        <label for="initials">Voorletters:</label>
        <input type="text" name="initials" id="initials" value="{{ $customer->initials }}" placeholder="J.A">
        <br>
        <label for="intersertion">Tussenvoegsel:</label>
        <input type="text" name="intersertion" id="intersertion" value="{{ $customer->intersertion }}" placeholder="van">
        
        <label for="surname">Achternaam:</label>
        <input type="text" name="surname" id="surname" value="{{ $customer->surname }}" placeholder="Brugge">
        <br>
        <label for="street">Straat:</label>
        <input type="text" name="street" id="street" value="{{ $customer->street }}" placeholder="Druifstraat">
        <br>
        <label for="house_number">Huisnummer:</label>
        <input type="number" name="house_number" id="house_number" value="{{ $customer->house_number }}" placeholder="8">
        
        <label for="house_number_addition">Toevoeging:</label>
        <input type="text" name="house_number_addition" id="house_number_addition" value="{{ $customer->house_number_addition }}" placeholder="A">
        <br>
        <label for="postal_code">Postcode:</label>
        <input type="text" name="postal_code" id="postal_code" value="{{ $customer->postal_code }}" placeholder="1234AB">
        
        <label for="city">Woonplaats:</label>
        <input type="text" name="city" id="city" value="{{ $customer->city }}" placeholder="Leeuwarden">
        <br>
        <label for="country">Land:</label>
        <input type="text" name="country" id="country" value="{{ $customer->country }}" placeholder="Nederland">
        <br>
        <label for="phone_number">Telefoonnummer:</label>
        <input type="tel" name="phone_number" id="phone_number" value="{{ $customer->phone_number }}" placeholder="+31 6 12345678">
        <br>
        <button type="submit">Update Customer</button>
    </form>
</body>

</html>
